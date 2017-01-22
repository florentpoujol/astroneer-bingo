<?php
require_once "data.php";
require_once "functions.php";


// change language based on user input (if any)
/*$acceptedLanguages = ["en", "fr"];
$currentLanguage = isset($_GET["lang"]) ? $_GET["lang"] : "en";
if (in_array($currentLanguage, $acceptedLanguages) === false)
    $currentLanguage = "en";

$dictionary = array();
$langFile = "locales/$currentLanguage.php";
if (file_exists($langFile))
    require_once $langFile; // overwrite the $dictionary variable
*/

// init
$seed = mt_rand();
$configSeed = "";
$items = array_keys($things);
$cardPool = []; // items that have been chosen by the user to (maybe) go on the card
$cardItems = []; // items that have been randomly selected from the pool for the cards
$rows = 5;
$cols = 5;
$cardSize = $rows * $cols;

$itemsPerCategory = [];
for ($i=0; $i < count($items); $i++) {
    $itemName = $items[$i];
    $item = $things[$itemName];
    $category = $item["category"];
    if (array_key_exists($category, $itemsPerCategory) === false) {
        $itemsPerCategory[$category] = [];
    }
    $itemsPerCategory[$category][] = $itemName;
}

// process POST
if (isset($_POST) && isset($_POST["generate"])) {
    // card
    $rows = (int)$_POST["rows"];
    $cols = (int)$_POST["cols"];
    $cardSize = $rows * $cols;

    // seed
    $seed = trim($_POST["seed"]);
    if ($seed === "")
        $seed = mt_rand();
    else {
        // look for a config seed
        $result = explode("/", $seed);
        $_seed = $result[0]; // can be a numerical value other than zero (the random seed) or a non numerical value (just the config string)
        if (is_int($_seed)) {
            $_seed = (int)$_seed;
            if ($_seed !== 0)
                $seed = $_seed;
        }
        else {
            $result[1] = $_seed; // suppose config seed
        }

        $configSeed = isset($result[1]) ? $result[1] : "";
    }

    // items
    foreach ($things as $itemName => $item) {
        if (isset($_POST[$itemName]))
            $cardPool[] = $itemName;
    }

    if (count($cardPool) >= $cardSize) {

        // generate card
        mt_srand($seed);
        mt_rand(); mt_rand(); mt_rand();

        // an array with the items
        // every time with generate a random number between 0 and the list length-1
        // and we remove this item from the list
        // and add it to a new item

        for ($i=0; $i<$cardSize; $i++) {
            $rand = mt_rand(0, count($cardPool)-1);
            list($item) = array_splice($cardPool, $rand, 1);
            $cardItems[] = $item;
        }
    }
    else
        echo "Error: not enough items have been selected !";
}
else {
    // form hasn't been validated
    // fill the POST var with the item that must be selected by default
    foreach ($things as $itemName => $item) {
        // var_dump($item);
        if ($item["selected_by_default"] === true)
            $_POST[$itemName] = "";
    }

    // generate base on the random seed
    foreach ($things as $itemName => $item) {
        if (isset($_POST[$itemName]))
            $cardPool[] = $itemName;
    }

    if (count($cardPool) >= $cardSize) {

        // generate card
        mt_srand($seed);
        mt_rand(); mt_rand(); mt_rand();

        // an array with the items
        // every time with generate a random number between 0 and the list length-1
        // and we remove this item from the list
        // and add it to a new item

        for ($i=0; $i<$cardSize; $i++) {
            $rand = mt_rand(0, count($cardPool)-1);
            list($item) = array_splice($cardPool, $rand, 1);
            $cardItems[] = $item;
        }
    }
    else
        echo "Error: not enough items have been selected !";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Astroneer Bingo</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Astroneer Bingo</h1>

    <p>
        Astroneer Bingo is a game where you have to collect/print/research/find all items of a row, collumn or diagonal of an <a href="http://astroneer.space" title="Go to Astroneer's website">Astroneer</a>'s themed Bingo card as fast as possible. <br>
        <br>
        So that it's actually enjoyable in the context of Astroneer, the size of the cards as well as the items that may appear on them are completely configurable below. <br>
        <br>
        Each card is linked to a unique <i>seed</i>, which represents its randomness factor and configuration. You just need to share the seed and anyone can reconstruct  and play the exact same card. <br>
        <br>
        Once you have found a card you like and completed it, feel free to share its seed and your time on the <a href="https://forum.systemera.net" title="Go to System Era forums">forums</a> or <a href="https://www.reddit.com/r/Astroneer" title="Go to Astroneer Reddit">Reddit</a> for instance. <br>
        <br>
        Beyond the items that appear of the cards, feel free to create your own rules. <br>
        If there is a research item, for instance, it's up to you to decide if it's enough to find it or if you need to research it. <br>
        Or for the resources, you decide if it counts if you get it by mining and/or trading and/or research. <br>
        <br>
        Be creative, and enjoy !
    </p>

    <br>
    <hr>
    <h2>Config</h2>

    <form target="" method="post">
        <a href="#" class="show_link" showtarget="config_section">toggle config</a> <br>
        <div id="config_section">
            <fieldset>
                <legend>Card Size</legend>

                Rows : <input type="number" name="rows" value="<?php echo $rows; ?>" min="2" max="10"> 
                Columns : <input type="number" name="cols" value="<?php echo $cols; ?>" min="2" max="10">
            </fieldset> <br>

<?php

foreach ($itemsPerCategory as $cat => $catItems) {
    echo "<a href='#'' class='show_link' showtarget='$cat'>toggle $cat</a>
    <fieldset id='$cat'><legend>$cat</legend>
        <table>";

    $nbRows = ceil(count($catItems) / 6);
    $itemId = 0;
    for ($i=0; $i < $nbRows; $i++) {
        echo "<tr>";

        for ($j=0; $j < 6; $j++) {
            if ($itemId >= count($catItems))
                break;

            $itemName = $catItems[$itemId];
            $itemId++;
            $item = $things[$itemName];

            $url = $item["url"];
            if ($url === "")
                $url = "images/$itemName.jpg";
            else
                $url = $wikiCDNUrl."/".ltrim($url, "/");

            // temp
            // if (isset($_POST[$itemName]) == false)
            //     $_POST[$itemName] = "";
            // /temp
            $checked = isset($_POST[$itemName]) ? "checked" : "";
            $selected = "";
            if ($checked) $selected = "class='selected'";
            echo "<td $selected><label> <img src='$url' title='$itemName' width='100px' height='100px'> <input type='checkbox' name='$itemName' $checked></label></td>";
        }
        echo "</tr>";
    }

    echo "</table></fieldset><br>";
}
?>
        </div> <!-- end config div -->
        <br>
        <fieldset>
            <legend>Seed</legend>

            <label>Seed : <input type="number" name="seed" value="<?php echo $seed; ?>" placeholder=""></label> Leave blank for random seed. <br>
        </fieldset>
        <br>
        <input type="submit" name="generate" value="Create bingo card"> <br>
    </form>

    <br>
    <hr>
    <h2>Card</h2>

    <section>
        Seed : <?php echo $seed; ?>
    <table id="card">
<?php
for ($rowI=1; $rowI<=$rows; $rowI++) {
    echo "<tr>";
    for ($colI=1; $colI<=$cols; $colI++) {
        echo "<td>";

        if (count($cardItems) > 0) {
            $itemName = array_shift($cardItems);
            // var_dump($cardItems);
            // var_dump($itemName);
            $item = $things[$itemName];
            // var_dump($item);

            $url = $item["url"];
            if ($url === "")
                $url = "images/$itemName.jpg";
            else
                $url = $wikiCDNUrl."/".ltrim($url, "/");

            $title = $itemName."\ractions: ";
            foreach ($item["actions"] as $key => $value) {
                if ($key > 0)
                    $title .= " or ";
                $title .= $value;
            }
            // $action = "do something";
            echo "<img src='$url' title='$title' alt='$itemName' width='100px' height='100px'>";
        }

        echo "</td>";
    }
    echo "</tr>";
}
?>
        </table>
    </section>

    <br>

    <footer>
    <br>
    <hr>
    <br>
    Contacts: <a href="https://twitter.com/FlorentPoujol">@FlorentPoujol</a> | contact <i>at</i> astroneerbingo <i>dot</i> space | <a href="https://github.com/florentpoujol/astroneer-bingo">Github repo</a>
    </footer>

    <br>

    <script type="text/javascript" src="bingo.js"></script>
</body>
</html>