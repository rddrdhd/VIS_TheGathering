<?php 
class Card {
    var $multiverseID;
    var $name;
    var $cmc;
    var $colors;


function __construct($multiverseID) { 
    $APIurl = "https://api.magicthegathering.io/v1/cards/".$multiverseID;
    $json = file_get_contents($APIurl);
    $json_data = json_decode($json, true);
    $card = ($json_data["card"]);

    $this->multiverseID = $card["multiverseid"];
    $this->name = $card["name"];
    $this->cmc = $card["cmc"];
    $this->colors = $card["colors"];
}

public static function defaultCard(){
    $th = new self(386616);
    $th->multiverseID=386616;
    $th->name="Narset, Enlightened Master";
    $th->cmc="6";
    $th->colors = ["White","Blue","Red"];
}

}