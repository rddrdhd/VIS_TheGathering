<?php

$title = $_POST['tTitle'];
$date = $_POST['tDate'];
$location = $_POST['tLocation'];
$price = $_POST['tPrice'];
$prize = $_POST['tPrize'];
$type = $_POST['tType'];
$note = $_POST['tNote'];

$content =
    "title,".$title.";".
    "date,".$date.";".
    "location,".$location.";".
    "price,".$price.";".
    "prize,".$prize.";".
    "type,".$type.";".
    "note,".$note.";";

PostDAO::addTournament($content);
echo "OK: ".$content;
