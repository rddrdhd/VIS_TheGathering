<?php
$PageTitle="TGHome";
include_once('header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }
include_once('menu.php');

//$p = DeckDAO::getOneBy("idDeck", 1);
//var_dump($p);

//var_dump(new Card(386616));
var_dump(DeckDAO::getOneBy("idDeck", 1));



include_once('footer.php');?>
