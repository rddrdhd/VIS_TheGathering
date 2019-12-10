<?php
# http://vis.l/indexAPI.php/ads/new?aTitle=title&aType=card&aCardId=234&aQuantity=2&aPrice=12&aNote=Ahoj
$title = $_GET['aTitle'];
$type = $_GET['aType'];
$cardId = $_GET['aCardId'];
$note = $_GET['aNote'];
$quantity = $_GET['aQuantity'];
$price = $_GET['aPrice'];
$note = $_GET['aNote'];


$content =
    "title,".$title.";".
    "type,".$type.";".
    "cardId,".$cardId.";".
    "quantity,".$quantity.";".
    "price,".$price.";".
    "note,".$note.";";

PostDAO::addAd($content);
$cardImgUrl = CardDAO::getImageUrlByID($cardId);
?>
<?php echo $cardImgUrl ?>
