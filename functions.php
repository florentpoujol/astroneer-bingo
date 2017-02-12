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

// display all item ids in order in an array
// so that I can quickly find thee next id to use and missing ids (that happend)
function checkThingsIds() {
    global $things;
    $ids = [];
    foreach ($things as $thing) {
        $ids[] = $thing["id"];
    }
    sort($ids);
    var_dump($ids);
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

            // remove the added leading 1
            // do not use ltrim($bin, "1") because it will remove all the leading ones
            $a = str_split($bin);
            array_shift($a);

            $configStr .= implode($a);
        }

        // by now, $configStr is a long "binary" string
        // ie: 1111111001100000011111111111110000000100011000011111000100
        // note that the binary string may be shorter than the number of items in existance
        // all missing items from the binary string  are considered as not selected

        $configArray = str_split($configStr);
        $itemNamesById = getItemNamesById();
        // loop throught item names in order and if they are selected "1" in the configStr, add them to the pool
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
                if (isset($item["in_default_item_pool"]) && $item["in_default_item_pool"] === true)
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
    $configStr = rtrim($configStr, "0"); // remove trailing 0s to slightly shorten the string

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
    if (count($itemPool) < $cardSize)
        echo "Error: not enough items in the item pool<br>";
        // throw new Exception("Error: not enough items in the item pool, something must be wrong your seed.");

    $cardItems = [];
    mt_srand($seed);
    mt_rand(); mt_rand(); mt_rand();

    for ($i = 0; $i < $cardSize; $i++) {
        $itemCount = count($itemPool);
        if ($itemCount === 0)
            break;

        $rand = mt_rand(0, $itemCount-1);
        $item = array_splice($itemPool, $rand, 1)[0];
        $cardItems[] = $item;
    }
    return $cardItems;
}
