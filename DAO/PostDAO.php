<?php


class PostDAO {


    public static function getAll() {
        $postsArrays = PostDAO::loadAllArray();
        $postsObjects = array();

        foreach($postsArrays as $post) {
            $p = self::fillPost($post);
            array_push($postsObjects, $p);
        }

        return $postsObjects;
    }

    public static function getOneBy($column, $value) {
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $db->where($column,$value);
        $post = $db->getOne("post");
        $p = self::fillPost($post);
        return $p;
    }

    private static function fillPost($post) {
        $p = new Post();
        $p->idPost = $post["idPost"];
        $p->content = $post["content"];
        $p->createdAt = $post["createdAt"];
        $p->deletedAt = $post["deletedAt"];
        $p->rights = $post["rights"];
        $p->type = $post["type"];
        return $p;
    }

    private static function loadAllArray(){
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $posts = $db->get('post');
        return $posts;
    }
}