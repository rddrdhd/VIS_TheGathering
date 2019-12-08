<?php $PageTitle = "TG | Tournaments";
$allItems = PostDAO::getAllType(4);?>

<a href="tournaments/new" class="a_button">
    <div class="button button-add button-add-tournament">
        Add new tournament
    </div>
</a>

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
