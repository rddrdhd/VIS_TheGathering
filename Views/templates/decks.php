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
            <div class="button_sticky button_sticky_second">
                <a >
                    <div onclick="importDeck()" class="button button-add">
                        Import new deck
                    </div>
                </a>
            </div>
            <div id="import-deck">

            </div>
        </div>
    </div>

<script>
function importDeck() {
    var txt;
    var importString = prompt("insert the string", "deckTitle=ahoj&count=2&card1=123&card2=234");
    if (importString == null || importString === "") {
        txt = "You did not insert anything!.";
    } else {
        //alert(importString);
        debugger;
        txt = "by clicking <a href='http://www.vis-zur0037.php5.cz/indexAPI.php/decks/new?".concat(
            importString,
            "'>here</a> your deck will be imported");
    }
    document.getElementById("import-deck").innerHTML += txt;
}
</script>
