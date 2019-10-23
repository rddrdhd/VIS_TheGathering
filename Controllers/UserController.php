<?php
/** Autoloading The required Classes **/
class UserController {
    private $model;

    function __construct( $tile ) {
        /** Loading the corresponding Model class **/
        $this->model = new $tile;
    }

    public function user() {
        return "User Method";
    }
    
    public function login() {
        echo "Login Method from user";
    }
}
?>