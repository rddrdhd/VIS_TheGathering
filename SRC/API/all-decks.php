<?php include_once("thatssecret.php");

echo "<pre>";
print_r(json_encode(DeckDAO::getAll(),true));
echo "</pre>";
