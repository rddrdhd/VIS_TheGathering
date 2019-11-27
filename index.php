<?php
$PageTitle="TGHome";
include_once('SRC/base/header.php');
function customPageHeader(){?>
    <!--custom hlavička-->
<?php }




echo "<pre>";
var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

echo "<pre>";
var_dump(__DIR__);
echo "</pre>";

$request = $_SERVER['REQUEST_URI'];
//var_dump($request);die();
switch ($request) {
    case '/' :
        echo "lomitko";
        break;
    case '' :
        echo "bez lomitka";
        break;
    case '/cards' :
        include_once('SRC/templates/cards.php');
        break;
    case '/posts' :
        include_once('SRC/templates/posts.php');
        break;
    case '/decks' :
        include_once('SRC/templates/decks.php');
        break;
    case '/ads' :
        include_once('SRC/templates/ads.php');
        break;
    case '/tournaments' :
        include_once('SRC/templates/tournaments.php');
        break;
    case '/users' :
        include_once('SRC/templates/users.php');
        break;

        case '/API';
            require __DIR__ . 'SRC/API/all-users.php';
            break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}


include_once('SRC/base/footer.php');?>
