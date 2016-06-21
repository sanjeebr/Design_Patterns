<?php
/**
 * Database class - only one connection alowed.
 *@package Database
 *@subpackage
 *@category
 *@author Sanjeeb Rao
 */
class database {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'mindfire';
    private $database = 'registration';
    private $connection = NULL;

    // The single instance
    private static $instance = NULL;


    /**
     * Get an instance of the Database
     *
     *@access public
     *@param  void
     *@return Instance
     */
    public static function get_instance() {
        if(self::$instance === NULL) {

            // If no instance then make one
            self::$instance = new self();
        }
        return self::$instance;
    }

    // Constructor
    private function __construct() {
        $this->connection = new mysqli($this->host, $this->username,
            $this->password, $this->database);

        // Error handling
        if(mysqli_connect_error()) {

        }
    }

    // Get mysqli connection
    public function get_connection() {
        return $this->connection;
    }
}
?>
