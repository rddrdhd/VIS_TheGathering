
<?php
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
        include_once('Views/API/all-posts.php');
        break;
    case '/indexAPI.php/all-decks' :
        include_once('Views/API/all-decks.php');
        break;
    case '/indexAPI.php/all-users' :
        include_once('Views/API/all-users.php');
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/404.php';
        break;
}
