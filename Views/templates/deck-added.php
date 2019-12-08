
<?php
$deckTitle = $_POST['deckTitle'];
$count = $_POST['hiddenCount'];
$deckID = DeckDAO::addDeck($deckTitle, null);

   $cards = Array();
if($count){
    echo "Karty: ";
    for($i = 1; $i<=$count; $i++){
      $cardID = $_POST['card'.$i];
      echo $i!=1?", ":"";
      echo $cardID;
      array_push($cards, $cardID);
    }
    echo "<br>celkem ".$count." karet v decku ".$deckTitle;
    DeckDAO::addCards($cards, $deckID);
}

