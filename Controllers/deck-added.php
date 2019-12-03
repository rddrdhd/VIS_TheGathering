
<?php
$deckTitle = $_POST['deckTitle'];
$count = $_POST['hiddenCount'];
//var_dump($deckTitle);echo"<br>";echo"<br>";
    //var_dump(DeckDAO::getAll());echo"<br>";echo"<br>";
    //DeckDAO::addDeck($deckTitle, null);
if($count){
    echo "Karty: ";
    for($i = 1; $i<=$count; $i++){
      $cardID = $_POST['card'.$i];
      echo $i!=1?", ":"";
      echo $cardID;
    }
    echo "<br>celkem ".$count." karet v decku ".$deckTitle;
}

