<?php


class UserDAO {
    public static function loadAllArray(){
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $users = $db->get('user');
        return $users;
    }

    public static function getAll(){
        $usersArrays = UserDAO::loadAllArray();
        $usersObjects = array();
        foreach($usersArrays as $user) {
            $u = new User();
            $u->idUser = $user["idUser"];
            $u->login = $user["login"];
            $u->password = $user["password"];
            $u->registeredAt = $user["registeredAt"];
            $u->deletedAt = $user["deletedAt"];
            $u->isCompany = $user["isCompany"];
            $u->isVerified = $user["isVerified"];
            $u->rights = $user["rights"];
            array_push($usersObjects, $u);
        }

        return $usersObjects;
    }


    public static function getById($id) {
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $db->where("idUser",$id);
        $user = $db->getOne("user");
        $u = new User();
        $u->idUser = $user["idUser"];
        $u->login = $user["login"];
        $u->password = $user["password"];
        $u->registeredAt = $user["registeredAt"];
        $u->deletedAt = $user["deletedAt"];
        $u->isCompany = $user["isCompany"];
        $u->isVerified = $user["isVerified"];
        $u->rights = $user["rights"];
        return $u;
    }

    public static function getByLogin($login) {
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $db->where("login",$login);
        $user = $db->getOne("user");
        $u = new User();
        $u->idUser = $user["idUser"];
        $u->login = $user["login"];
        $u->password = $user["password"];
        $u->registeredAt = $user["registeredAt"];
        $u->deletedAt = $user["deletedAt"];
        $u->isCompany = $user["isCompany"];
        $u->isVerified = $user["isVerified"];
        $u->rights = $user["rights"];
        return $u;
    }


}