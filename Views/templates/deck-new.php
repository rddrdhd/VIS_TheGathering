<?php
$multiverseIds = array();
?>
<div class="new_deck">
    <form action="/decks/added" method="post" id="TG_form">
        <div class="first">
            Deck title:
            <input type="text" name="deckTitle"><br>
<div>
            <div id="TG_form--add_card">
                multiverseID:<input id="multiverseID" type="number" name="multiverseID">
            </div>

            <a onclick="addCardField()" class="button-add" >Add card to deck</a>
</div>
            <input id="hiddenCount" type="hidden" name="hiddenCount">
        </div>

        <div class="second" id="TG_form--cards">
        </div>
        <div class="third">

            <input class="button button-add button_sticky" type="submit" value="Add deck">
        </div>
    </form>
</div>
