<!DOCTYPE html>
<html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <link rel="stylesheet" href="CSS/styles.css">
    <?php include_once("thatssecret.php")?>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Raleway:100,300&display=swap" rel="stylesheet">

</head><!-- /head -->

<body>
    <div id="header">
        <div class="title-tg">
            TheGathering
        </div>
    </div><!-- /#header -->


    <?php include_once('menu.php'); ?>
    <div id="body">
    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>
