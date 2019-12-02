<div class="menu" id="main-nav">
    <?php
        $menu = ["Cards","Posts","Decks","Ads","Tournaments","Users"];

        foreach($menu as $item): ?>
            <a href="/<?php echo strtolower($item) ?>" class="item">
                <div class="item-<?php echo strtolower($item) ?>">
                        <?php echo $item ?>
                </div>
            </a>
    <?php endforeach; ?>

</div>
