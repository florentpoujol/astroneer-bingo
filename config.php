    <hr>

    <section class="row">
        <h2>Create your own card</h2>

        <form action="." method="GET">
            If you have copied a seed from somewhere, you can paste it here:
            <input type="text" name="seed" placeholder="Something like 12345@6x56qw4gt" size="30"> <input type="submit" value="Build the card for that seed" class="btn btn-primary">
        </form>

        <p>Or build a new card below:</p>

        <form action="." method="post">
            <br>
            <input type="submit" name="generate_from_config" value="Build a new card with this configuration below" class="btn btn-primary">
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

                <ul class="nav nav-tabs" id="first-tab-row" role="tablist">
<?php
$setCategories = [];
foreach ($itemsByCategory as $cat => $catItems) {
    if ($i >= 7) break;
    $i++;
    $setCategories[] = $cat;
?>
                    <li role="presentation" class=""><a href="#<?php echo $cat; ?>" aria-controls="<?php echo $cat; ?>" role="tab" data-toggle="tab"><?php echo $cat; ?></a></li>

<?php
} // end foreach itemsByCategory
?>
                </ul>

                <div class="tab-content">
<?php
foreach ($itemsByCategory as $cat => $catItems) {
    if (in_array($cat, $setCategories) === false)
        continue;
?>
                    <div role="tabpanel" class="tab-pane" id="<?php echo $cat; ?>">
<?php
require "item-pool-category.php";
?>
                    </div> <!-- end div.tab-pane  -->
<?php
} // end foreach itemsByCategory
?>
                </div>
                <br>

<?php
// ============================================================================
// repeat almost the same code for the remaining categories
?>

                <ul class="nav nav-tabs" id="second-tab-row" role="tablist">
<?php
foreach ($itemsByCategory as $cat => $catItems) {
    if (in_array($cat, $setCategories))
        continue;
?>
                    <li role="presentation" class=""><a href="#<?php echo $cat; ?>" aria-controls="<?php echo $cat; ?>" role="tab" data-toggle="tab"><?php echo $cat; ?></a></li>

<?php
} // end foreach itemsByCategory
?>
                </ul>

                <div class="tab-content">
<?php
foreach ($itemsByCategory as $cat => $catItems) {
    if (in_array($cat, $setCategories))
        continue;
?>
                    <div role="tabpanel" class="tab-pane" id="<?php echo $cat; ?>">
<?php
require "item-pool-category.php";
?>
                    </div> <!-- end div.tab-pane  -->
<?php
} // end foreach itemsByCategory
?>
                </div>


            </div> <!-- end #item-pool -->


            <h3>Card size</h3>

            <input type="number" name="cardSize" value="<?php echo $rows; ?>" min="2" max="9"> rows and columns.
            Minimum 2, maximum 9. 5x5 is  the default and won't appear in the actual card seed. <br>
            <br>
            <input type="submit" name="generate_from_config" value="Build a new card with this configuration" class="btn btn-primary">

        </form>
    </section>
