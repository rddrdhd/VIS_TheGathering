<?php
class CardDAO {  // PATTERN ADAPTER - aby to z externího API bylo jak z vlastní DB

    public static function getByID($multiverseID) {

        $th = new Card();
        $APIurl = "https://api.magicthegathering.io/v1/cards/".$multiverseID;
        $json = file_get_contents($APIurl);

        $json_data = json_decode($json, true);
        $card = ($json_data["card"]);

        $th->multiverseID = $card["multiverseid"];
        $th->imageUrl = $card["imageUrl"];
        $th->name = $card["name"];
        $th->cmc = $card["cmc"];
        $th->colors = $card["colors"];

        return $th;
    }

    public static function getImageUrlByID($multiverseID){
        $APIurl = "https://api.magicthegathering.io/v1/cards/".$multiverseID;
        $json = file_get_contents($APIurl);

        $json_data = json_decode($json, true);
        return ($json_data["card"])["imageUrl"];
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
            $th->imageUrl = $card["imageUrl"];
            $th->name = $card["name"];
            $th->cmc = $card["cmc"];
            $th->colors = $card["colors"];
            array_push($cards, $th);
        }
        return $cards;
    }
}
