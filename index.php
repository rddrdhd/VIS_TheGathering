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
    case "posts":
        $items = PostDAO::getAllType(1);
        //include_once('SRC/templates/posts.php');
        break;
    case "cards":
    //$items = CardDAO::getByID(386616);
    $items = CardDAO::getByID(386616);
        //include_once('SRC/templates/cards.php');
        break;
    case "decks":
    $items = DeckDAO::getAll();
        //include_once('SRC/templates/decks.php');
        break;
    case "ads":
    $items = PostDAO::getAllType(3);
        //include_once('SRC/templates/ads.php');
        break;
    case "tournaments":
    $items = PostDAO::getAllType(4);
        //include_once('SRC/templates/tournaments.php');
        break;
    case "users":
    $items = UserDAO::getAll();
        //include_once('SRC/templates/users.php');
        break;

    default:
        ?> <h1 style="text-align:center;padding:80px;">nope</h1> <?php
        //include_once('SRC/templates/home.php');

endswitch;
echo "<pre>";
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
