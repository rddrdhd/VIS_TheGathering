<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="../../JS/main.js">
    <?php include_once("Service/thatssecret.php") ?>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Raleway:100,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../CSS/styles.css">

    <script>
        var cardCount = 0;
        function addCardField(){ //Garfield
            cardCount++;
            var count = document.getElementById('hiddenCount');
            var div = document.getElementById('TG_form--cards');
            var cardID = document.getElementById('multiverseID').value;
            div.innerHTML +=
                "card no. "+cardCount+" <br>" +
                "<input type='number' " +
                "name='card"+cardCount+"' " +
                "value='"+cardID+"' " +
                "id='card"+cardCount+"' >";
            count.value = cardCount;
        }

    </script>

</head><!-- /head -->
