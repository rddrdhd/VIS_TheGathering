<?php $PageTitle = "TG | Tournaments";
$allItems = PostDAO::getAllType(4);?>
<div class="TG_list">
    <div class="TG_itemlist">
        <?php foreach($allItems as $item):?>
            <div class="TG_itemlist--item"><?php
                $parts = explode(';', $item->content, 7);
                $content = Array();
                if(sizeof($parts)>1){
                    foreach($parts as $part){
                        $contents = explode(',', $part, 2);
                        $content[$contents[0]] = $contents[1];
                    }
                }

                if(sizeof($content)){
                    echo "Title: ".$content["title"];
                    echo "<br>Date: ".$content["date"];
                    echo "<br>Location: ".$content["location"];
                    echo "<br>Price: ".$content["price"];
                    echo "<br>Prize: ".$content["prize"];
                    echo "<br>Type: ".$content["type"];
                    echo "<br>Note: ".rtrim($content["note"],";");
                }
                ?>
                <hr >
            </div>

        <?php endforeach;?>
    </div>

    <div class="TG_list_button">
        <div class="button_sticky">
            <a href="tournaments/new">
                <div class="button button-add">
                    Add new tournament
                </div>
            </a>
        </div>
    </div>
</div>
