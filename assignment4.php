<?php

/**
 * Class to create connection.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Admin {

    function __construct()
    {
        echo "hii i am Admin";
    }
}

class Other {

    function __construct()
    {
        echo "hii i am normal user";
    }
}
class Login{
    private $username = 'root';
    private $password = 'abc';

    function check_user($user,$pass)
    {
        if($this->username === $user && $this->password === $pass)
        {
            $user = new Admin();
        }
        else
        {
            $user = new Other();
        }
    }
}
$obj = new Login();
$obj->check_user('root','ab');
?>