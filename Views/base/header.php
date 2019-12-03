<!DOCTYPE html>
<html>
<?php include_once('head.php');?>
<body>
    <div id="header">
        <a href="/">
            <div class="title-tg">
            TheGathering
            </div>
        </a>
    </div><!-- /#header -->


    <?php include_once('menu.php'); ?>
    <div id="body">
    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>
