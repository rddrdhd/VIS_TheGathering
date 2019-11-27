<?php include_once("thatssecret.php");

echo "<pre>";
echo "hello?";
//TODO nefunguje XxxDAO:getAll() po přesunutní souborů
print_r(json_encode(UserDAO::getAll(),true));
echo "</pre>";

