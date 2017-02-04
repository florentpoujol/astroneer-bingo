<?php
require_once "data.php";
require_once "functions.php";

// init
$seed = mt_rand();
$configStr = "";
$seedSeparatorChar = "-";
$items = array_keys($things);
$itemPool = getItemPool(true); // items that have been chosen by the user to (maybe) go on the card.  true == use default items
$cardItems = []; // items that have been randomly selected from the pool for the cards
$rows = 5;
$cols = 5;
$cardSize = $rows * $cols;

$itemsByCategory = [];
for ($i=0; $i < count($items); $i++) {
    $itemName = $items[$i];
    $item = $things[$itemName];
    $category = $item["category"];
    if (array_key_exists($category, $itemsByCategory) === false) {
        $itemsByCategory[$category] = [];
    }
    $itemsByCategory[$category][] = $itemName;
}

$SEOIndex = "index";
// seed may be transmitted through the URL
if (isset($_GET["seed"])) {
    $_POST["generate_from_seed"] = "";
    $_POST["seed"] = $_GET["seed"];
    $SEOIndex = "noindex";
}

// process POST
if (isset($_POST["generate_from_seed"])) {
    $fullSeed = trim($_POST["seed"]);
    if ($fullSeed !== "") {
        $char = $seedSeparatorChar;
        if (strpos($fullSeed, "/") !== false)
            $char = "/";
        $seeds = explode($char, $fullSeed);
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
$fullSeed = $seed.$seedSeparatorChar.$configStr;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Astroneer Bingo</title>
    <meta name="robots" content="<?php echo $SEOIndex; ?>,follow">
    <meta name="keywords" content="astroneer,bingo,astroneer bingo,mini-game,video game,system era,pc,steam,early access,xbox,xbox one,windows 10,game preview">
    <meta name="description" content="Astroneer Bingo is a mini-game where you have to collect/print/research/find all items of a row, column or diagonal of an Astroneer's themed Bingo card as fast as possible.">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <h1>Astroneer Bingo</h1>
        </div>

        <div class="row">
            <p>
                <br>
                <span class="lead">Astroneer Bingo is a mini-game where you have to collect/print/research/find all items of a row, column or diagonal of an <a href="http://astroneer.space" title="Go to Astroneer's website">Astroneer</a>'s themed Bingo card as fast as possible.</span> <br>
                <br>
                You get a new random card every times you reload this page. <br>
                <br>
                Alternatively you can also aim to collect as many items as possible in a set amount of time, or even get a <i>blackout</i> and collect all the items on the card. <br>
                <br>
                Once you have found a card you like and completed it, feel free to share its <i>seed</i> and your time on the <a href="https://forum.systemera.net" title="Go to System Era forums">forums</a> or <a href="https://www.reddit.com/r/Astroneer" title="Go to Astroneer Reddit">Reddit</a> for instance.
            </p>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <h2>Create and share your own cards</h2>

                <p>
                    So that it's actually enjoyable in the context of Astroneer, <!-- the size of the cards as well as --> the pool of items that may appear on them is completely configurable below. <br>
                    <br>
                    Each card is linked to a unique <i>seed</i>, which represents both its randomness factor and its item pool. You just need to share the seed and anyone can reconstruct and play the exact same card. <br>
                </p>
            </div>
            <div class="col-sm-6">
                <h2>Be creative on the rules</h2>

                <p>
                    Beyond the items that appear on the cards, feel free to create your own rules ! <br>
                    For instance with research items, it's up to you to decide if it's enough to find them or if you need to research them. <br>
                    Or for a resource stack, you decide if it counts if you get it by mining and/or trading and/or research.
                </p>
            </div>
        </div>

<?php require_once "card.php"; ?>

<?php require_once "config.php"; ?>

        <footer>
            <hr>
            <ul>
                <li>Contacts: <a href="https://twitter.com/FlorentPoujol">@FlorentPoujol</a> | bingo <i>at</i> astroneerbingo <i>dot</i> space | <a href="https://github.com/florentpoujol/astroneer-bingo">Github repo</a>.</li>
                <li>Background art <a href="https://systemera.net">&copy; System Era</a>, from <a href="http://astroneer.space">Astroneer's website</a> | All images of items are in-game screenshots by various users, <a href="http://astroneer.gamepedia.com/Astroneer_Wiki">from the Wiki</a>.</li>
            </ul>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bingo.js"></script>
</body>
</html>