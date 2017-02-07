    <hr>

    <section class="row">
        <h2>Create your own card</h2>

        <form action="." method="post">
            <br>
            <input type="submit" name="generate_from_config" value="Build a new card with this configuration" class="btn btn-primary">
            <br>


            <h3>Randomness factor</h3>

            <p>
                <input type="number" name="random_seed" value="<?php echo $seed; ?>" min="0" max="<?php echo $randmax; ?>" >
                Any number beetween 0 and <?php echo $randmax; ?>. Leave empty to generate a random one. <br>
            </p>


            <h3>Item Pool</h3>

            <div id="item-pool">
                <p>
                    Selected items below compose the pool of items that may appear on the generated cards.
                    Click on them to select/unselect. <br>
                    <br>
                    Number of selected items in the pool: <strong><span id="item-pool-size"></span></strong><br>
                    Must be minimum <span id="card-size"></span>.
                </p>

<?php
foreach ($itemsByCategory as $cat => $catItems) {
?>
                <div class='panel panel-default'>
                    <div class='panel-heading' data-toggle='collapse' data-target='#<?php echo $cat; ?>'><?php echo $cat; ?> <span class="glyphicon glyphicon-plus"></span></div>

                    <div id="<?php echo $cat; ?>" class="collapse panel-body">
                        <span class="toggle-category-link" category="<?php echo $cat; ?>">Select/unselect all</span>
                        <div class="flex-container">
<?php
    foreach ($catItems as $itemId => $itemName) {
        $item = $things[$itemName];

        $url = "";
        if (isset($item["url"]))
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
            </div> <!-- end #item-pool -->


            <h3>Card size</h3>

            <input type="number" name="cardSize" value="<?php echo $rows; ?>" min="2" max="9"> rows and columns.
            Minimum 2, maximum 9. 5x5 is  the default and won't appear in the actual card seed. <br>
            <br>
            <input type="submit" name="generate_from_config" value="Build a new card with this configuration" class="btn btn-primary">

        </form>
    </section>
