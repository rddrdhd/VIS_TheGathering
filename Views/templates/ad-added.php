<?php

$title = $_POST['aTitle'];
$type = $_POST['aType'];
$cardId = $_POST['aCardId'];
$note = $_POST['aNote'];
$quantity = $_POST['aQuantity'];
$price = $_POST['aPrice'];

echo "<br>".$title;
echo "<br>".$type;
echo "<br>".$cardId;
echo "<br>".$note;
echo "<br>".$quantity;
echo "<br>".$price;


$content =
    "title,".$title.";".
    "type,".$type.";".
    "cardId,".$cardId.";".
    "quantity,".$quantity.";".
    "price,".$price.";".
    "note,".$note.";";

//PostDAO::addAd($content);
echo "OK: ".$content."<br>";
$cardImgUrl = CardDAO::getImageUrlByID($cardId);
?>
<img class="card" src="<?php echo $cardImgUrl ?>"><br>
card ad added
