<div class="menu" id="main-nav">
    <?php 
        $menu = ["Cards","Posts","Decks","Ads","Tournaments","Users"];
        foreach($menu as $item):
            //RewriteRule ^/posts/([0-9]+)\.html /templates/posts.php?post_id=$1
    ?>
    <a href="/index.php?nav=<?php echo $item ?>">
            <div class="item">
                    <?php echo $item ?>
            </div>

            </a>

    <?php
        endforeach;
    ?>
</div>