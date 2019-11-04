<?php


class Deck {
    var $idDeck;
    var $name;
    var $createdAt;
    var $deletedAt;
    var $rights;
    var $owner;

    public static function defaultDeck() {
        $th = new self();
        $th->name = "D".microtime();
        $th->createdAt = time();
        $th->rights = 1;
        $th->owner = UserDAO::getOneBy("idUser",1);

        return $th;
    }
}