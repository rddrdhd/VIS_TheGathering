<?php
class CardDAO {

    public static function getByID($multiverseID) { 
      
        $th = new Card();
        $APIurl = "https://api.magicthegathering.io/v1/cards/".$multiverseID;
        $json = file_get_contents($APIurl);
     
        $json_data = json_decode($json, true);
        $card = ($json_data["card"]);

        $th->multiverseID = $card["multiverseid"];
        $th->name = $card["name"];
        $th->cmc = $card["cmc"];
        $th->colors = $card["colors"];

        return $th;
    }

    public static function findByName($name) {
        $cards = array();
        $APIurl = "https://api.magicthegathering.io/v1/cards?name=".$name;
        $json = file_get_contents($APIurl);
    
        $json_data = json_decode($json, true);
        foreach($json_data as $card){
            $th = new Card();
            $card = ($json_data["card"]);
            $th->multiverseID = $card["multiverseid"];
            $th->name = $card["name"];
            $th->cmc = $card["cmc"];
            $th->colors = $card["colors"];
            array_push($cards, $th);
        }

        return $cards;
    }
}
