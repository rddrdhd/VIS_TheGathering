<?php
include_once('Views/base/header.php');
function customPageHeader(){?>
    <!--custom hlavička-->

<?php }

// MODIFIED PATTERN MVC - V+C in one, but different tags

/*
echo "<pre>";
//var_dump($_SERVER['REQUEST_URI']);
echo "</pre>";

echo "<pre>";
var_dump(__DIR__);
echo "</pre>";
*/
$request = explode('?', $_SERVER['REQUEST_URI'], 2)[0];

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
        include_once('Views/templates/deck-new.php');
        break;
    case '/decks/added' :
        include_once('Views/templates/deck-added.php');
        break;

    case '/ads' :
        include_once('Views/templates/ads.php');
        break;

    case '/ads/new' :
        include_once('Views/templates/ad-new.php');
        break;
    case '/ads/added' :
        include_once('Views/templates/ad-added.php');
        break;

    case '/tournaments' :
        include_once('Views/templates/tournaments.php');
        break;
    case '/tournaments/new' :
        include_once('Views/templates/tournament-new.php');
        break;
    case '/tournaments/added' :
        include_once('Views/templates/tournament-added.php');
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
