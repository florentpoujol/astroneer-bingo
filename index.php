<?php
require_once "data.php";
require_once "functions.php";

// init
$seed = mt_rand();
$configStr = "";
$items = array_keys($things);
$itemPool = getItemPool(true); // items that have been chosen by the user to (maybe) go on the card.  true == use default items
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
if (isset($_POST["generate_from_seed"])) {
    $fullSeed = trim($_POST["seed"]);
    if ($fullSeed !== "") {
        $seeds = explode("/", $fullSeed);
        $seed = $seeds[0];
        $configStr = $seeds[1];
    }

    $itemPool = getItemPool($configStr); // get selected items from the configStr
}
elseif (isset($_POST["generate_from_config"])) {
    $itemPool = getItemPool(); // get selected items from the form ($_POST);
}

$cardItems = generateCardItems($itemPool, $cardSize, $seed);
$configStr = getConfigStr($itemPool);
$fullSeed = $seed."/".$configStr;

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
        Astroneer Bingo is a mini-game where you have to collect/print/research/find all items of a row, column or diagonal of an <a href="http://astroneer.space" title="Go to Astroneer's website">Astroneer</a>'s themed Bingo card as fast as possible. <br>
        You get a new random card every times you reload this page. <br>
        <br>
        Alternatively you can also aim to collect as many items as possible in a set amount of time, or even get a blackout and collect all the items on the card. <br>
        <br>
        Once you have found a card you like and completed it, feel free to share its <i>seed</i> and your time on the <a href="https://forum.systemera.net" title="Go to System Era forums">forums</a> or <a href="https://www.reddit.com/r/Astroneer" title="Go to Astroneer Reddit">Reddit</a> for instance.
    </p>

    <h2>Create and share your own cards</h2>

    <p>
        So that it's actually enjoyable in the context of Astroneer, <!-- the size of the cards as well as --> the items that may appear on them are completely configurable. <br>
        <br>
        Each card is linked to a unique <i>seed</i>, which represents both its randomness factor and configuration. You just need to share the seed and anyone can reconstruct and play the exact same card. <br>
    </p>

    <h2>Be creative on the rules</h2>

    <p>
        Beyond the items that appear on the cards, feel free to create your own rules ! <br>
        For research item, for instance, it's up to you to decide if it's enough to find it or if you need to research it. <br>
        Or for a resource stack, you decide if it counts if you get it by mining and/or trading and/or research. <br>
        <br>
        Enjoy !
    </p>



<?php require_once "card.php"; ?>

<?php require_once "config.php"; ?>
    <br>

    <footer>
    <br>
    <hr>
    <br>
    Contacts: <a href="https://twitter.com/FlorentPoujol">@FlorentPoujol</a> | contact <i>at</i> astroneerbingo <i>dot</i> space | <a href="https://github.com/florentpoujol/astroneer-bingo">Github repo</a> <br>
    <br>
    Background art <a href="https://systemera.net">&copy; System Era</a>, from <a href="http://astroneer.space">Astroneer's website</a> | All images of items are in-game screenshots by various users, <a href="http://astroneer.gamepedia.com/Astroneer_Wiki">from the Wiki</a>.
    </footer>

    <br>

    <script type="text/javascript" src="bingo.js"></script>
</body>
</html>