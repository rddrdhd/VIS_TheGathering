<?php
# vis.l/indexAPI.php/decks/new?deckTitle=ahoj&count=2&card1=123&card2=234
$deckTitle = $_GET['deckTitle'];
$count = $_GET['count'];
if($count){
    $deckID = DeckDAO::addDeck($deckTitle, null);
    $cards = Array();
    for($i = 1; $i<=$count; $i++){
        $cardID = $_GET['card'.$i];
        echo $i!=1?", ":"";
        echo $cardID;
        array_push($cards, $cardID);
    }
    echo "<br>celkem ".$count." karet v decku ".$deckTitle;
    DeckDAO::addCards($cards, $deckID);
}
