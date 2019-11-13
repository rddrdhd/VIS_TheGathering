<?php
$PageTitle="TGHome";
include_once('header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }
include_once('menu.php');

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'vis');

//require_once 'mtgsdk/mtgsdk:dev-master';
require_once('MysqliDb.php');
require_once('DAO/UserDAO.php');
require_once('DTO/User.php');
require_once('DAO/PostDAO.php');
require_once('DTO/Post.php');
require_once('DAO/DeckDAO.php');
require_once('DTO/Deck.php');
require_once('API/Card.php');
ini_set("allow_url_fopen", 1);
//$p = DeckDAO::getOneBy("idDeck", 1);
//var_dump($p);

//var_dump(new Card(386616));
var_dump(DeckDAO::getOneBy("idDeck", 1));



include_once('footer.php');?>
<pre>eoi</pre>
