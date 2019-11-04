<?php
$PageTitle="Index";
include_once('header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }

DEFINE('DB_USERNAME', 'root');
DEFINE('DB_PASSWORD', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_DATABASE', 'vis');


require_once('MysqliDb.php');
require_once('DAO/UserDAO.php');
require_once('DTO/User.php');
require_once('DAO/PostDAO.php');
require_once('DTO/Post.php');
require_once('DAO/DeckDAO.php');
require_once('DTO/Deck.php');

$p = DeckDAO::getOneBy("idDeck", 1);
var_dump($p);

echo "<br>eeeeyo<br>";





include_once('footer.php');?>
<br>eof
