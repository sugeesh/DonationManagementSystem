<?php

/**
 * Created by PhpStorm.
 * User: Neo_
 * Date: 1/16/16
 * Time: 6:58 PM
 */

namespace Model;

class Connection
{
    private static $instance;
    private $connection;
    private $db_host = "localhost";
    private $db_username = "root";
    private $db_password = "";
    private $db_name = "school";

    private function __construct()
    {
        $this->connection = mysqli_connect($this->db_host, $this->db_username, $this->db_password, $this->db_name);

        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),E_USER_ERROR);
        }
    }

    public function get_connection(){
        return $this->connection;
    }

    //!!! This method checks to see if the instance already exists, if exists this will be used, else the instance is created
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Connection();
        }

        return self::$instance;
    }
}

?>