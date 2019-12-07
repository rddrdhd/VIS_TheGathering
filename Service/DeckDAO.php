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

    private static function fillDeck($deck) {//from array
        $d = new Deck();
        $d->idDeck = $deck["idDeck"];
        $d->name = $deck["name"];
        $d->createdAt = $deck["createdAt"];
        $d->deletedAt = $deck["deletedAt"];
        $d->rights = $deck["rights"];
        $d->owner = UserDAO::getOneBy("idUser", $deck["idUserOwner"]);
        $d->cards = self::getCards($d->idDeck);

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

        $db->where("idDeck", $idDeck);
        $cards = $db->get("carddeck", null, ["idCard", "count"]);
        return $cards;
    }


    public static function addDeck($deckName, $cardIDs){
        $id = 0;
        if($cardIDs == null){
            $db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            try {
                $data = [
                    'name' => $deckName,
                    'createdAt' => $db->now(),
                    'rights' => 1,
                    'idUserOwner' => 1
                ];

                $id = $db->insert('deck', $data);
            } catch (Exception $e) {
                echo $e;
            }

        }

        return $id;
    }

    public static function addCards($cardsArray, $deckID) {
        $db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $rows = 0;

        foreach($cardsArray as $id) {
            try {
                $data = [
                    'idDeck' => $deckID,
                    'idCard' => $id,
                    'count' => 1
                ];

                $rows = $db->insert('carddeck', $data); //TMP - insertMulti

            } catch (Exception $e) {
                echo $e;
            }
        }
        echo "<br>OK";
        return $rows;
    }


}
