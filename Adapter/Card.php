<?php 
class Card {
    var $multiverseID;
    var $name;
    var $cmc;
    var $colors;

    public static function defaultCard(){
        $th = new self(386616);
        $th->multiverseID=386616;
        $th->name="Narset, Enlightened Master";
        $th->cmc="6";
        $th->colors = ["White","Blue","Red"];
    }
}