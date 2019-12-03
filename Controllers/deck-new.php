<?php
$multiverseIds = array();
?>

    <form action="added" method="post">
    Deck title:
    <input type="text" name="deckTitle"><br>
    Cards: jednakarta, dvekarty, trikarty, ctyrikarty...<br>

    <input class="button button-add" type="submit" value="Add deck">
</form>

<form id="TG_form-card"  method="post">
    multiverseID:<div id="TG_form-add_card">
        <input id="multiverseID" type="number" name="multiverseID">
    </div>
    <a onclick="addCard()" class="button-add" >Add card to deck</a>


    <div id="TG_form-cards"></div>
</form>

