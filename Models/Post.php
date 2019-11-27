<?php


class Post {
    var $idPost;
    var $content;
    var $createdAt;
    var $deletedAt;
    var $rights;
    var $type;
    var $author;
    var $target;

    public static function defaultPost() {
        $th = new self();
        $th->content = "P".microtime();
        $th->createdAt = time();
        $th->deletedAt = null;
        $th->rights = "1";
        $th->type = "post";
        $th->author = UserDAO::getOneBy("login","root");
        $th->target = UserDAO::getByLogin("pepik");
        return $th;
    }

}