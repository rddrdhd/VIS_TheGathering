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

    public static function getAllType($type) {
        $array = array();

        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $db->where('type',$type);
        $items = $db->get('post');
        //var_dump($items);
   // $items = $db->rawQuery('SELECT * FROM post WHERE type = {$type}');//$db->get('post');
        foreach($items as $item){

          $post =  self::fillPost($item);
//TODO: musím to spravit!
            array_push($array, $post);

        //v//ar_dump($post);
        }

        var_dump($array);
        return $array;
    }

    private static function fillPost($post) {
        $p = new Post();
        $p->idPost = $post["idPost"];
        $p->content = $post["content"];
        $p->createdAt = $post["createdAt"];
        $p->deletedAt = $post["deletedAt"];
        $p->rights = $post["rights"];
        $p->type = $post["type"];
        $p->author = UserDAO::getOneBy("idUser",$post["idUserAuthor"]);
        if ($post["idUserTarget"]){
            $p->target = UserDAO::getOneBy("idUser",$post["idUserTarget"]);
        } else if ($post["idPostTarget"]) {
            $p->target = PostDAO::getOneBy("idPost",$post["idPostTarget"]);
        } else if ($post["idDeckTarget"]){
            $p->target = DeckDAO::getOneBy("idDeck",$post["idDeckTarget"]);
        } else {$p->target = 0;}
        return $p;
    }

    private static function loadAllArray(){
        $db = new MysqliDb (DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        $posts = $db->get('post');
        return $posts;
    }
}