    <hr>

    <section class="row">
        <h2>Card</h2>

        <form target="" method="post">
            Seed for this card: <input type="text" name="seed" placeholder="Enter something like 123456789/abcdefghijklmnop" size="40" required value="<?php echo $fullSeed; ?>"> <br>
            <span id="build_card_text"><strong>or update this seed and </strong><input type="submit" name="generate_from_seed" value="build a new card" class="btn btn-primary"></span> <br>
            Share this seed or directly <strong><a href="http://astroneerbingo.space/index.php?seed=<?php echo $fullSeed; ?>" rel="nofollow">this link</a></strong> for others to play the same card ! <br>
            <br>
        </form>

        You can click on items to mark them as completed and use the timer below to track time.
        <table id="card" class="">
<?php
for ($rowI = 1; $rowI <= $rows; $rowI++) {
    $rowClass = "row".$rowI;
?>
            <tr>
<?php
    for ($colI = 1; $colI <= $cols; $colI++) {
        $colClass = "col".$colI;

        $diag1Class = "";
        if ($rowI === $colI)
            $diag1Class = "diag1";

        $diag2Class = "";
        if (
            ($rowI === 1 && $colI === 5) ||
            ($rowI === 2 && $colI === 4) ||
            ($rowI === 3 && $colI === 3) ||
            ($rowI === 4 && $colI === 2) ||
            ($rowI === 5 && $colI === 1)
        )
            $diag2Class = "diag2";
?>
                <td class='<?php echo "$rowClass $colClass $diag1Class $diag2Class"; ?>'>
<?php
        // var_dump($cardItems);
        if (count($cardItems) > 0) {
            $itemName = array_shift($cardItems);
            $item = $things[$itemName];

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
?>
                    <img src='<?php echo $url; ?>' title='<?php echo $title; ?>' alt='<?php echo $itemName; ?>' width='100px' height='100px'><br>
                    <span><strong><?php echo $itemName; ?></strong></span>
<?php
        }
?>
                </td>
<?php
    }
?>
            </tr>
<?php
}
?>
        </table>

        <section id="timer" class="jumbotron">
            <span id="display">00:00</span>

            <span id="controls">
                <button id="play-btn" action="play" class="btn btn-success">Play</button>
                <button id="stop-btn" class="btn btn-danger">Stop</button>
            </span>

            <span id="bingo-time">Bingo in <span>00:00</span> !</span>
        </section>
    </section>