<div class="menu" id="main-nav">
    <?php 
        $menu = ["Cards","Posts","Decks","Ads","Tournaments","Users"];

        foreach($menu as $item): ?>
            <a href="/?nav=<?php echo strtolower($item) ?>">
                <div class="item">
                        <?php echo $item ?>
                </div>
            </a>
    <?php endforeach; ?>
    
</div>