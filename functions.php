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
- non-empty string > process the config seed
*/
function getItemPool($configStr = "") {
    global $things;
    $itemPool = [];

    if (is_string($configStr) && strlen($configStr) > 0) {
        var_dump($configStr);
        // ie : +10-2+2-6+44-9+1-3+2-4+5-6+1-5
        $configStr = preg_replace_callback(
            "/(\+|-)([0-9]?)/",
            function($matches) {
                $sign = $matches[1] === "+" ? "1" : "0";
                $repeats = isset($matches[2]) ? $matches[2] : "1";
                var_dump($repeats);
                return str_repeat($sign, (int)$repeats);
            },
            $configStr
        );

        // by now, $configStr is ie :
        //1111111001100000011111111111111111111111111111111110000000001000110000111110000001000
        // var_dump($configStr);

        $configArray = str_split($configStr);
        $itemNamesById = getItemNamesById();
        for ($i = 0; $i < count($itemNamesById) ; $i++) {
            $itemName = $itemNamesById[$i];
            if ($configArray[0] === "1")
                $itemPool[] = $itemName;
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
    for ($i = 0; $i < count($itemNamesById) ; $i++) {
        $itemName = $itemNamesById[$i];
        $str = (int)in_array($itemName, $itemPool);
        $configStr .= $str; // "0" or "1"
    }

    // $configStr is something like :
    //11111011001100000011111111111111111111111111111111110000000001000110000111110000001000
var_dump($configStr);
    $configArray = str_split($configStr);
    $sign = ($configArray[0] === "1") ? "+" : "-";
    $seriesSize = 1;
    $configStr = "";

    for ($i=1; $i < count($configArray); $i++) {
        $char = $configArray[$i];
        if ( ($sign === "+" && $char === "1") || ($sign === "-" && $char === "0")) {
            $seriesSize++;
        }
        elseif (($sign === "+" && $char === "0") || ($sign === "-" && $char === "1")) {
            if ($seriesSize === 1)
                $seriesSize = "";
            $configStr .= $sign.$seriesSize;
            $sign = ($char === "1") ? "+" : "-";
            $seriesSize = 1;
        }
    }
    if ($seriesSize === 1)
        $seriesSize = "";
    $configStr .= $sign.$seriesSize;

    // now configStr looks like
    // -2+7-+-2+6-+2-+2-+2-+2-2+4-+3-2+2-2+2-2+4-3+2-2+-+-5+2-3+4-6+-2+-3

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
        echo "Error: not enough items have been selected !";
    return $cardItems;
}