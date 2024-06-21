<?php
class User{
 
    // database connection and table name
    private $conn;
    private $table_name = "users";
 
    // object properties
    public $id;
    public $username;
    public $password;
    public $created;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function get_userdata(int $user_id){
        $query = "SELECT
                    `id`, `username`, `created`
                FROM
                    " . $this->table_name . " 
                WHERE
                    username='".$user_id."'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        return $stmt;
    }
}