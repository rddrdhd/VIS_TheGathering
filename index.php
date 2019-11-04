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

$user = UserDAO::getAll();
var_dump($user);

echo "<br>eeeeyo<br>";





include_once('footer.php');?>
<br>eof
