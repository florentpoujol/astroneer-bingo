    <section>
        <hr>

        <h2>Item Pool</h2>

        <p>Selected items below compose the pool of items that may appear on the generated cards. They are green when selected, click on them to select/unselect</p>

        <form target="" method="post" id="configuration">

            <input type="submit" name="generate_from_config" value="Generate a new random card with this pool"> <br>
            <br>

            <!-- <h3 class="show_link" showtarget="card_size">Card size <span>-</span></h3>

            <div id="card_size">
                <input type="number" name="cols" value="<?php echo $cols; ?>" min="2" max="10"> columns x
                <input type="number" name="rows" value="<?php echo $rows; ?>" min="2" max="10"> rows<br>
            </div> -->

<?php

foreach ($itemsPerCategory as $cat => $catItems) {
    echo "<div class='item_cat'><h3 class='show_link'  showtarget='$cat'>$cat <span>-</span></h3>
    <table id='$cat'>";

    $nbColumns = 7;
    $nbRows = ceil(count($catItems) / $nbColumns);
    $itemId = 0;
    for ($i=0; $i < $nbRows; $i++) {
        echo "<tr>";

        for ($j=0; $j < $nbColumns; $j++) {
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

            $checked = in_array($itemName, $itemPool) ? "checked" : "";
            $selected = "";
            if ($checked) $selected = "class='selected'";
            echo "<td $selected><label> <img src='$url' title='$itemName' width='100px' height='100px'> <input type='checkbox' name='$itemName' $checked></label></td>";
        }
        echo "</tr>";
    }

    echo "</table></div>";
}
?>
        </form>
    </section>