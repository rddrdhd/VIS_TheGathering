<?php
$multiverseIds = array();
?>

<form action="add" method="post">
    Deck title: <input type="text" name="deckTitle"><br>
    Cards: jednakarta, dvekarty, trikarty, ctyrikarty...<br>
    <button>Add card</button><br><br>

    <input type="submit">
</form>
<form method="post">
    multiverseID: <input type="number" name="multiverseID"><br>
    <button>Add card to deck</button><br><br>

    <button onclick="addCard()"></button>
</form>



