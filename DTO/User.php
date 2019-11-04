<?php


class User {
    var $idUser;
    var $login;
    var $password;
    var $registeredAt;
    var $deletedAt;
    var $picUrl;
    var $isCompany;
    var $isVerified;
    var $rights;

    public static function defaultUser() {
        $th = new self();
        $th->login = "U".microtime();
        $th->password = "";
        $th->registeredAt = time();
        $th->deletedAt = null;
        $th->picUrl = null;
        $th->isCompany = 0;
        $th->isVerified = 0;
        $th->rights = 1;

        return $th;
    }
}