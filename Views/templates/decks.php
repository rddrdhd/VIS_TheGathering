<?php
    $PageTitle = "TG | Decks";
    //$allItems = DeckDAO::getAll();
    ?>
This is decks.php

<div class="buttAdd">
    <a href="decks/new">Add new</a>
</div>

<!--div class="TG_itemlist"  >
    <?php foreach($allItems as $item):?>
    <div class="TG_itemlist--item">
        <?php// var_dump($item)?><br><br>
        Deck jménem: <?php echo $item->name ?>, má karty:

        <?php foreach($item->cards as $card): ?><br>
            karta s ID <?php echo $card["idCard"];?>
            je v decku <?php echo $card["count"];?>x.
        <?php endforeach;?><br><br>

    </div>


<?php endforeach;?>
</div-->
