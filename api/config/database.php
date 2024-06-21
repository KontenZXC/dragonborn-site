<?php
include dirname(__FILE__).'/cfg.php';

class Database{
    private $host;
    private $db_name;
    private $username;
    private $password;
    public $conn;
 
    // конструктор класса Database
    public function __construct(){
        $this->setConfig();
    }

    // Задать значения свойств из Config
    private function setConfig(){
        $cfg = new Config();
        $this->host = $cfg->host;
        $this->db_name = $cfg->database_name;
        $this->username = $cfg->username;
        $this->password = $cfg->password;
    }

    // Получить соединение с базой данных
    public function getConnection(){
        $this->conn = null;
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>