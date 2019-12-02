<?php
$multiverseIds = array();
?>

<form action="added" method="post">
    Deck title: <input type="text" name="deckTitle"><br>
    Cards: jednakarta, dvekarty, trikarty, ctyrikarty...<br>

    <input type="submit" value="Add deck">
</form>

<form id="TG_form-popup" style="display:none;" method="post">
    multiverseID: <input type="number" name="multiverseID">
    <button onclick="addCard()">Add card to deck</button>
</form>

<button onclick="document.getElementById('TG_form-popup').style.display = 'block';">Add card</button><br><br>



