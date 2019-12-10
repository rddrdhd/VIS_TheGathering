<?php
# vis.l/indexAPI.php/decks/new?deckTitle=ahoj&count=2&card1=123&card2=234
$deckTitle = $_GET['deckTitle'];
$count = $_GET['count'];
if($count){
    //$deckID = DeckDAO::addDeck($deckTitle, null);
    $cards = Array();
    echo"cards";
    for($i = 1; $i<=$count; $i++){
        $cardID = $_GET['card'.$i];
        echo ",";
        echo $cardID;
        array_push($cards, $cardID);
    }
    echo ";count,".$count.";deckTitle,".$deckTitle.";";
    //DeckDAO::addCards($cards, $deckID);
}
