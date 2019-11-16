<?php
$PageTitle="TGHome";
include_once('header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }
if(isset($_GET['nav'])):
    $navitem = strtolower($_GET['nav']);

    //individual stuff
    include_once('SRC/templates/'.$navitem.'.php');
    ?> 
 
    <?php
    
switch ($_GET['nav']):
    case "Posts":
        $items = PostDAO::getAllType(2);
        //include_once('SRC/templates/posts.php');
        break;
    case "Cards":
        //include_once('SRC/templates/cards.php');
        break;
    case "Decks":
    $items = DeckDAO::getAll();
        //include_once('SRC/templates/decks.php');
        break;
    case "Ads":
        //include_once('SRC/templates/ads.php');
        break;
    case "Tournaments":
        //include_once('SRC/templates/tournaments.php');
        break;
    case "Users":
        //include_once('SRC/templates/users.php');
        break;

    default:
        ?> <h1 style="text-align:center;padding:80px;">nope</h1> <?php
        //include_once('SRC/templates/home.php');

endswitch;
echo "<pre>";
$items = PostDAO::getAll();
var_dump($items);
echo "</pre>";
endif;
/*
echo "<pre>";

$p = DeckDAO::getOneBy("idDeck", 1);
var_dump($p);

echo "</pre>";
echo "<pre>";
var_dump(new Card(386616));
var_dump(DeckDAO::getOneBy("idDeck", 1));

echo "</pre>";

/
include_once('footer.php');?>
