<?php
class Database {
    //  db credentials
    private $host = "localhost";
    private $db_name = "db_dantas_portfolio";
    private $user = "root";
    private $password = "";
    public  $conn;
    //  database connection
    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->user, $this->password);
            $this->conn->exec("set names utf8");
            
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
            exit();
        }
        return $this->conn;
    }
}
?>
