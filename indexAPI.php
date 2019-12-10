<?php
require_once('Service/thatssecret.php');

require_once('Service/MysqliDb.php');
require_once('Service/UserDAO.php');
require_once('Models/User.php');
require_once('Service/PostDAO.php');
require_once('Models/Post.php');
require_once('Service/DeckDAO.php');
require_once('Models/Deck.php');

require_once('Adapter/Card.php');
require_once('Adapter/CardDAO.php');

ini_set('allow_url_fopen', 1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$request = explode('?', $_SERVER['REQUEST_URI'], 2)[0];


switch ($request) {
    case '/indexAPI.php/' :
        echo "lomitko";
        break;
    case '/indexAPI.php' :
        echo "bez lomitka";
        break;

    case '/indexAPI.php/posts' :
        print_r(json_encode(PostDAO::getAllType(1),true));
        break;

    case '/indexAPI.php/ads' :
        print_r(json_encode(PostDAO::getAllType(3),true));
        break;
    case '/indexAPI.php/ads/new' ://USE CASE
        include_once('Views/API/new-ad-API.php');
        break;

    case '/indexAPI.php/tournaments' :
        print_r(json_encode(PostDAO::getAllType(4),true));
        break;
    case '/indexAPI.php/tournaments/new' ://USE CASE
        include_once('Views/API/new-tournament-API.php');
        break;

    case '/indexAPI.php/decks' :
        print_r(json_encode(DeckDAO::getAll(),true));
        break;
    case '/indexAPI.php/decks/new' : //USE CASE
        include_once('Views/API/new-deck-API.php');
        break;

    case '/indexAPI.php/users' :
        print_r(json_encode(UserDAO::getAll(),true));
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}

