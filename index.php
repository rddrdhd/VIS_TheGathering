<?php
include_once('Views/base/header.php');
function customPageHeader(){?>
    <!--custom hlavička-->

<?php }



/*
echo "<pre>";
//var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

echo "<pre>";
var_dump(__DIR__);
echo "</pre>";
*/
$request = $_SERVER['REQUEST_URI'];
//var_dump($request);die();
switch ($request) {
    case '/' :
        include_once('Views/templates/home.php');
        break;
    case '' :
        include_once('Views/templates/home.php');
        break;
    case '/cards' :
        include_once('Views/templates/cards.php');
        break;
    case '/posts' :
        include_once('Views/templates/posts.php');
        break;

    case '/decks' :
        include_once('Views/templates/decks.php');
        break;
    case '/decks/new' :
        include_once('Controllers/deck-new.php');
        break;
    case '/decks/added' :
        include_once('Controllers/deck-added.php');
        break;

    case '/ads' :
        include_once('Views/templates/ads.php');
        break;
    case '/tournaments' :
        include_once('Views/templates/tournaments.php');
        break;
    case '/users' :
        include_once('Views/templates/users.php');
        break;

    default:
        http_response_code(404);
        include_once('Views/404.php');
        break;
}


include_once('Views/base/footer.php');?>
