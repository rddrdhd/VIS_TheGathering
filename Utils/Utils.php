<?php


class Utils { //PATTERN UTLITITY - statické funkce používané všude možně
    public static function canAdd($cardNew, $count,$deck){
        $cards = DeckDAO::getCards($deck->idDeck);
        foreach($cards as $card){
            if($cardNew->multiverseID == $card->multiverseID){
                if($cardNew + $count <5 || $cardNew->type == "land" && $cards.length() + $count < 60){
                    return true;
                }
            }
        }
        return false;

    }

    public static function toArray($object){
        $arr = Array();
        foreach ($object as $a){
            array_push($arr, $a);
        }
        return $arr;
    }
}
