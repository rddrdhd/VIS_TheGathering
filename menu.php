<div class="menu" id="main-nav">
    <?php 
        $menu = ["Cards","Posts","Decks","Ads","Tournaments","Users"];
        foreach($menu as $item):
    ?>
    <a href=<?php echo "/".$item.".php"?>>
            <div class="item">
                    <?php echo $item; ?>
            </div>

            </a>

    <?php
        endforeach;
    ?>
</div>