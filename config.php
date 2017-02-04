    <hr>

    <section class="row">
        <h2>Item Pool</h2>

        <p>Selected items below compose the pool of items that may appear on the generated cards. They are green when selected, click on them to select/unselect</p>

        <form target="" method="post" id="configuration">

            <input type="submit" name="generate_from_config" class="btn btn-primary" value="Generate a new random card with this pool"> <br>
            <br>
            <p>
                Number of selected items in the pool: <strong><span id="item-pool-count"></span></strong><br>
                Must be 25 or more.
            </p>

            <!-- <h3 class="show_link" showtarget="card_size">Card size <span>-</span></h3>

            <div id="card_size">
                <input type="number" name="cols" value="<?php echo $cols; ?>" min="2" max="10"> columns x
                <input type="number" name="rows" value="<?php echo $rows; ?>" min="2" max="10"> rows<br>
            </div> -->

<?php
foreach ($itemsByCategory as $cat => $catItems) {
?>
            <div class='panel panel-default'>
                <div class='panel-heading' data-toggle='collapse' data-target='#<?php echo $cat; ?>'><?php echo $cat; ?> <span class="glyphicon glyphicon-plus"></span></div>

                <div id="<?php echo $cat; ?>" class="collapse panel-body">
                    <div class="flex-container">
<?php
    foreach ($catItems as $itemId => $itemName) {
        $item = $things[$itemName];

        $url = $item["url"];
        if ($url === "")
            $url = "images/$itemName.jpg";
        else
            $url = $wikiCDNUrl."/".ltrim($url, "/");

        $checked = in_array($itemName, $itemPool) ? "checked" : "";
        $selected = "";
        if ($checked) $selected = "selected";
?>
                        <div class="config-item <?php echo $selected; ?>">
                            <label>
                                <img src='<?php echo $url; ?>' title='<?php echo $itemName; ?>' width='100px' height='100px'><br>
                                <input type='checkbox' name='<?php echo $itemName; ?>' <?php echo $checked; ?>>
                                <span><?php echo substr($itemName, 0, 20); ?></span>
                            </label>
                        </div>
<?php
    }
?>
                    </div> <!-- end flex-container -->
                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
<?php
} // end foreach itemsByCategory
?>
        </form>
    </section>
