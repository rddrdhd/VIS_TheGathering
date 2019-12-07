
<?php
$deckTitle = $_POST['deckTitle'];
$count = $_POST['hiddenCount'];
//var_dump($deckTitle);echo"<br>";echo"<br>";
    //var_dump(DeckDAO::getAll());echo"<br>";echo"<br>";
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
    //$deck = DeckDAO::getOneBy("idDeck", $deckID);
    //var_dump($deck);

    DeckDAO::addCards($cards, $deckID);
}

