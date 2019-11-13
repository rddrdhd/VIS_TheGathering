<?php


class DeckDAO {
    public static function getAll(){
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

        $decksArray = $db->get('deck');
        $decksObjects = array();

        foreach($decksArray as $deck) {
            $d = self::fillDeck($deck);
            array_push($decksObjects, $d);
        }

        return $decksObjects;
    }

    private static function fillDeck($deck) {
        $d = new Deck();
        $d->idDeck = $deck["idDeck"];
        $d->name = $deck["name"];
        $d->createdAt = $deck["createdAt"];
        $d->deletedAt = $deck["deletedAt"];
        $d->rights = $deck["rights"];
        $d->owner = UserDAO::getOneBy("idUser", $deck["idUserOwner"]);
        $d->cards = self::getCards();

        return $d;
    }

    public static function getOneBy($column, $value) {
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $db->where($column,$value);
        $deck = $db->getOne("deck");
        $d = self::fillDeck($deck);

        return $d;
    }


    public static function getCards($idDeck){
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        
        $db->where("");//TODO

        return $cards;
    }

}