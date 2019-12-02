<?php
include_once('Service/thatssecret.php');
    $PageTitle = "TG | Decks";
    $allItems = DeckDAO::getAll();
    ?>
This is decks.php
    <div class="row">
    <div class="button button-add">
        <a href="decks/new">Add new</a>
    </div>

    <div class="TG_itemlist"  >
        <?php foreach($allItems as $item):?>
        <div class="TG_itemlist--item">
            <?php// var_dump($item)?><br><br>
            Deck jménem "<?php echo $item->name ?>"
<?php if($item->cards):?> má karty:
            <?php foreach($item->cards as $card): ?><br>
                karta s ID <?php echo $card["idCard"];?>
                je v decku <?php echo $card["count"];?>x.
            <?php endforeach;?><br><br>
<?php endif;?>
        </div>


    <?php endforeach;?>
    </div>
</div>
