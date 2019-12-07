<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../../CSS/styles.css">
    <link href="../../JS/main.js">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <?php include_once("Service/thatssecret.php") ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Raleway:100,300&display=swap" rel="stylesheet">

    <script>
        var cardCount = 0;
        function addCardField(){ //Garfield
            cardCount++;
            var count = document.getElementById('hiddenCount');
            var div = document.getElementById('TG_form-cards');
            var cardID = document.getElementById('multiverseID').value;
            div.innerHTML +=
                "card no. "+cardCount+" <br>" +
                "<input type='number' " +
                "name='card"+cardCount+"' " +
                "value='"+cardID+"' " +
                "id='card"+cardCount+"' ><hr>";
            count.value = cardCount;
        }

    </script>

</head><!-- /head -->
