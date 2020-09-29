<?php
/**
 * Database connector class
 *
 * @author Bence Ladoczki (hikari.code@gmail.com)
 */
class DatabaseConnector {
    private $username = "animefil_betufront";
    private $password = "Animefil1990";
    private $dbhost   = "127.0.0.1";
    private $dbport = 3306;
    private $dbname = "animefil_amf";
    private $charset = 'utf8' ;
    public $conn;
    public $db;

    public function connect() {
        $this->db = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname.';charset=utf8mb4'.';port='.$this->dbport.'', $this->username,$this->password);
    }
    public function set_database_name($database) {
	    $this->dbname = $database;
    }
}
