<?php include_once("thatssecret.php");

echo "<pre>";
print_r(json_encode(PostDAO::getAll(),true));
echo "</pre>";
