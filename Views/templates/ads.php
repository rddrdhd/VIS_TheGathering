<?php $PageTitle = "TG | Ads";
$allItems = PostDAO::getAllType(3)?>
<div class="TG_list">
    <div class="TG_itemlist">
        <?php foreach($allItems as $item):?>
        <pre>
        <?php print_r($item);?>
        </pre>
        <hr>
        <?php endforeach; ?>
    </div>
    <div class="TG_list_button">
        <div class="button_sticky">
            <a href="ads/new">
                <div class="button button-add">
                    Add new ad
                </div>
            </a>
        </div>
    </div>
</div>
