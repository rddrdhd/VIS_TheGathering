
<?php
include_once("Service/thatssecret.php");
//echo "<pre>";
//var_dump($_SERVER['REQUEST_URI']);
//echo "</pre>";

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/indexAPI.php/' :
        echo "lomitko";
        break;
    case '/indexAPI.php' :
        echo "bez lomitka";
        break;
    case '/indexAPI.php/all-posts' :
        //include_once('Views/Adapter/all-posts.php');
        print_r(json_encode(PostDAO::getAllType(1),true));
        break;
    case '/indexAPI.php/all-ads' :
        print_r(json_encode(PostDAO::getAllType(3),true));
        break;
    case '/indexAPI.php/all-tournaments' :
        print_r(json_encode(PostDAO::getAllType(4),true));
        break;
    case '/indexAPI.php/all-decks' :
        //include_once('Views/Adapter/all-decks.php');
        print_r(json_encode(DeckDAO::getAll(),true));
        break;
    case '/indexAPI.php/all-users' :
        //include_once('Views/Adapter/all-users.php');
        print_r(json_encode(UserDAO::getAll(),true));
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
