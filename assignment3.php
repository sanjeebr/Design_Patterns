<?php

/**
 * Class to create connection.
 */


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



class User {

    /* Member variables */
    private $username = '';
    private $password = '';

    /**
     * Add email id to array
     *
     * @access public
     * @param  string $email_id
     * @return NULL
     */
    public function __construct($username, $password) {
       $this->username = $username;
       $this->password = $password;
       $Admin_obj = new Admin();
       $Admin_obj->message($username);
    }
}
class Admin {

    public function message($username) {
       echo 'New user added '.$username;
    }
}

$obj = new User('sanjeeb','rao');
?>
