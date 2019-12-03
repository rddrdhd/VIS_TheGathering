
... <?php
    $deckTitle = $_POST['deckTitle'];
    var_dump($deckTitle);echo"<br>";
    //var_dump(DeckDAO::getAll());echo"<br>";echo"<br>";
    DeckDAO::addDeck($deckTitle, null);
