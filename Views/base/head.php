<head>
    <?php
    include_once("Service/thatssecret.php");//database stuff
    /*
        DEFINE('DB_USERNAME', 'xxx');
        DEFINE('DB_PASSWORD', 'xxx');
        DEFINE('DB_HOST', 'xxx');
        DEFINE('DB_DATABASE', 'xxx');
    */
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
    ?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="../../JS/main.js">


    <link href="https://fonts.googleapis.com/css?family=Roboto|Raleway:100,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/styles.css">

    <script>
        var cardCount = 0;
        function addCardField(){ //Garfield
            cardCount++;
            var count = document.getElementById('hiddenCount');
            var div = document.getElementById('TG_form--cards');
            var cardID = document.getElementById('multiverseID').value;
            var cardImgUrl = 1;
            div.innerHTML +=
                "card no. "+cardCount +": "+ cardID+" <br>" +
                "<input type='hidden' " +
                "name='card"+cardCount+"' " +
                "value='"+cardID+"' " +
                "id='card"+cardCount+"'> ";
            count.value = cardCount;
        }

    </script>

</head><!-- /head -->
