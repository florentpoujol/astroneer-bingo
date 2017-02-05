    <hr>

    <section class="row" id="card-anchor">
        <h2>Card <small>for seed</small> <?php echo $fullSeed; ?></h2>

        <p>
            Share this seed or directly <strong><a href="http://astroneerbingo.space/<?php echo $fullSeed; ?>" rel="nofollow">this link</a></strong> for others to play the same card.<br>
            You can click on items to mark them as completed and use the timer below to track time. <br>
            The time to Bingo will be automatically displayed whever detected.
        </p>

        <table id="card">
<?php
$diag2Cols = []; // in order column ids (for each rows) at which
for ($i = $rows; $i > 0 ; $i--)
    $diag2Cols[] = $i;

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
        if (isset($diag2Cols[0])) {
            $diag2Col = $diag2Cols[0];
            if ($diag2Col === $colI) {
                array_shift($diag2Cols);
                $diag2Class = "diag2";
            }
        }
?>
                <td class='<?php echo "$rowClass $colClass $diag1Class $diag2Class"; ?>'>
<?php
        // var_dump($cardItems);
        if (count($cardItems) > 0) {
            $itemName = array_shift($cardItems);
            $item = $things[$itemName];

            $url = "";
            if (isset($item["url"]))
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