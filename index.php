<?php
$PageTitle="TGHome";
include_once('header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }
include_once('menu.php');
switch ($_GET['nav']){
    case "Posts":
            include_once('SRC/templates/posts.php');
            break;
        case "Cards":
            include_once('SRC/templates/cards.php');
            break;
        case "Decks":
            include_once('SRC/templates/decks.php');
            break;
        case "Ads":
            include_once('SRC/templates/ads.php');
            break;
        case "Tournaments":
            include_once('SRC/templates/tournaments.php');
            break;
        case "Users":
            include_once('SRC/templates/users.php');
            break;


    default:

}
//$p = DeckDAO::getOneBy("idDeck", 1);
//var_dump($p);

//var_dump(new Card(386616));
//var_dump(DeckDAO::getOneBy("idDeck", 1));



include_once('footer.php');?>
