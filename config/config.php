<?php
$username = "root";
$password = "";
$server = "localhost";
$database = "employee";
$conn = mysqli_connect($server, $username, $password, $database);
class conn{
    private $username = "root";
    private $password = "";
    private $server = "localhost";
    private $database = "employee";
    private $conn;
    public function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->password, $this->database) or die("Connection not established");
    }
    public function conn()
    {
        return $this->conn;
    }
    
}
?>