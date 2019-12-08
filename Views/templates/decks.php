<?php
    $PageTitle = "TG | Decks";
    $allItems = DeckDAO::getAll();
    ?>
    <div class="TG_list" id="deck-items">

        <div class="TG_itemlist">
            <?php foreach($allItems as $item):?>
                <div class="TG_itemlist--item">

                    Deck jménem <b><?php echo $item->name ?></b>
                    <br></b>vlastní <?php echo $item->owner->login;

                    if($item->cards):?><br>
                        <?php foreach($item->cards as $card): ?><br>
                            karta s ID <?php echo $card["idCard"];?>
                            je v decku <?php echo $card["count"];?>x.
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
                <hr style="margin: 20px 0;">
            <?php endforeach;?>
        </div>
        <div class="TG_list_button">
            <div class="button_sticky">
                <a href="decks/new">
                    <div class="button button-add">
                        Add new deck
                    </div>
                </a>
            </div>
        </div>
    </div>
