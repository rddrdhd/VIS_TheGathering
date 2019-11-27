<?php include_once("thatssecret.php");

echo "<pre>";
print_r(json_encode(UserDAO::getAll(),true));
echo "</pre>";

