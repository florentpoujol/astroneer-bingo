    <section>
        <hr>

        <h2>Card</h2>

        <p>
            Seed for this card: <strong><?php echo $fullSeed; ?></strong><br>
            Share this seed or directly <strong><a href="http://astroneerbingo.space/index.php?seed=<?php echo $fullSeed; ?>">this link</a></strong> for others to play the same card !
        </p>

        <p>
            <form target="" method="post">
                Or enter your own seed: 
                <input type="text" name="seed" placeholder="Enter something like 123456789/abcdefghijklmnop" size="40" required >  <!-- pattern="[0-9]{1,}/[a-z0-9]{1,}" -->
                <input type="submit" name="generate_from_seed" value="Build card from this seed">
            </form>
        </p>

        <table id="card">
<?php
for ($rowI = 1; $rowI <= $rows; $rowI++) {
    echo "<tr>";
    for ($colI = 1; $colI <= $cols; $colI++) {
        echo "<td>";
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

            echo "<img src='$url' title='$title' alt='$itemName' width='100px' height='100px'>";
        }

        echo "</td>";
    }
    echo "</tr>";
}
?>
        </table>
        You can click on items to mark them as completed and use the timer below to track time.
        <br>
        <section id="timer">
            <span id="display">00:00</span>

            <span id="controls">
                <button id="play" class="play">Play</button>
                <button id="stop">Stop</button>
            </span>
        </section>

    </section>