<?php

function getLang($key) {
    global $dictionary;
    $str = $key;
    if (in_array($key, $dictionary))
        $str = $dictionary[$key];
    return $key;
}

function getItemNamesById() {
    global $things;
    $itemNamesById = [];
    foreach ($things as $itemName => $item) {
        if (isset($item["id"]))
            $itemNamesById[$item["id"]] = $itemName;
    }
    return $itemNamesById;
}


/*
argument values :
- true > use default itemPpol
- no argument or "" > use values from $_POST
- non-empty string > process the config string
*/
function getItemPool($configStr = "") {
    global $things;
    $itemPool = [];

    if (is_string($configStr) && strlen($configStr) > 0) {
        // $configStr is a base36 string
        // ie: e13wu1ofc0wjqwgc70jyf0u8

        $chunks = str_split($configStr, 10); // a chunk of 10 chars in base36 will give 50 chars in base 2
        $configStr = "";
        foreach($chunks as $chunk) {
            $bin = base_convert($chunk, 36, 2);
            $a = str_split($bin);
            array_shift($a);
            $bin = implode($a);
            // do not use ltrim($bin, "1") because it will remove all the leading ones
            $configStr .= $bin; // remove the added leading 1
        }

        // by now, $configStr is a long "binary" string
        // ie: 1111111001100000011111111111110000000100011000011111000100

        $configArray = str_split($configStr);
        $itemNamesById = getItemNamesById();
        // loop throught item names in ordder and if they are selected "1" in the configStr, add them to the pol
        foreach ($itemNamesById as $itemName) {

            if (isset($configArray[0])) {
                if ($configArray[0] === "1")
                    $itemPool[] = $itemName;
            }
            else
                break;
            array_shift($configArray);
        }
    }
    else {
        foreach ($things as $itemName => $item) {
            if ($configStr === true) {
                if (isset($item["selected_by_default"]) && $item["selected_by_default"] === true)
                    $itemPool[] = $itemName;
            }

            elseif ($configStr === "") {
                if (isset($_POST[$itemName]))
                    $itemPool[] = $itemName;
            }
        }
    }

    return $itemPool;
}


function getConfigStr($itemPool) {
    $configStr = "";

    $itemNamesById = getItemNamesById();
    foreach ($itemNamesById as $itemName) {
        $configStr .= (int)in_array($itemName, $itemPool); // "0" or "1"
    }

    // $configStr is now a big "binary" string
    // ie: 1111111001100000011111111111110000000100011000011111000100

    $chunks = str_split($configStr, 49);
    $configStr = "";
    foreach ($chunks as $chunk) {
        $chunk = "1".$chunk; // always add 1 at the beginning, because base_convert() ignores leading 0s
        $shortChunk = base_convert($chunk, 2, 36);
        $configStr .= $shortChunk;
        // note : there is no separation between the converted chunks, it supose that they are all 10 chars long, except maybe the last one
    }

    return $configStr;
}


function generateCardItems($itemPool, $cardSize, $seed) {
    $cardItems = [];
    if (count($itemPool) >= $cardSize) {
        mt_srand($seed);
        mt_rand(); mt_rand(); mt_rand();

        for ($i = 0; $i < $cardSize; $i++) {
            $rand = mt_rand(0, count($itemPool)-1);
            $item = array_splice($itemPool, $rand, 1)[0];
            $cardItems[] = $item;
        }
    }
    else
        throw new Exception("Error: not enough items in the item pool, something must be wrong your seed");
    return $cardItems;
}