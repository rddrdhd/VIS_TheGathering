NEW-TOURNAMENT-API<?php
# vis.l/indexAPI.php/tournaments/new?tTitle=XXX&tDate=2019-12-13T23:58&tLocation=OVA&tPrize=&tPrice=&tType=restricted&tNote=Ahoj&tAuthorID=1
$title = $_GET['tTitle'];
$date = $_GET['tDate'];
$location = $_GET['tLocation'];
$price = $_GET['tPrice'];
$prize = $_GET['tPrize'];
$type = $_GET['tType'];
$note = $_GET['tNote'];
$authorID = $_GET['tAuthorID'];
$content =
    "title,".$title.";".
    "date,".$date.";".
    "location,".$location.";".
    "price,".$price.";".
    "prize,".$prize.";".
    "type,".$type.";".
    "note,".$note.";";

//PostDAO::addTournament($content);
echo $content;
