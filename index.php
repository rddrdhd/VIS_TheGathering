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
$db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$users = $db->get('user');
var_dump($users);

include_once('footer.php');?>
<br>eof
