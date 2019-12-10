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
        foreach($items as $item){
            $post =  self::fillPost($item);
            array_push($array, $post);
        }
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

    public static function addTournament($content){
        $id = 0;
        if($content==null){
            return $id;
        }
        else {
            $db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

            try {
                $data = [
                    'content' => $content,
                    'createdAt' => $db->now(),
                    'rights' => 1,
                    'type' => 4,
                    'idUserAuthor' => 1
                ];

                $id = $db->insert('post', $data);

            } catch (Exception $e) {
                echo $e;
            }

            return $id;
        }
    }

    public static function addAd($content){
        $id = 0;
        if($content==null){
            return $id;
        } else {
            $db = new MysqliDb(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
            try {
                $data = [
                    'content' => $content,
                    'createdAt' => $db->now(),
                    'rights' => 1,
                    'type' => 3,
                    'idUserAuthor' => 1 ];
                $id = $db->insert('post', $data);
            } catch (Exception $e) {
                echo $e;
            }
            return $id;
        }
    }
}
