
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
