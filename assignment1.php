<?php

/**
 * Class to create connection.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class user {

    /* Member variables */
    private $username = '';
    private $password = '';
    private static $inst = NULL;
    private static $count = 0;

    public function __construct(){
        self::$count++;
        echo self::$count.'<br>';
    }

    /**
     * Login
     *
     * @access public
     * @param  void
     * @return object
     */
    public static function login() {
        if (self::$inst === NULL) {
            self::$inst = new self();
        }
        return self::$inst;
    }

    public static function logout() {
         self::$inst = NULL;
         echo "logout...";
    }


}
print_r(user::login());
echo '<br><br>';
print_r(user::login());
echo '<br><br>';
print_r(user::logout());
echo '<br><br>';
print_r(user::login());
?>
