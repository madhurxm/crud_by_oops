<?php

class crud
{
    private $server = "localhost";
    private $username = "root";
    private $pass = "";
    private $database = "employee";
    private $conn;

    // Constructor for establishing connection whenever object is created
    public function __construct()
    {
        $this->conn = mysqli_connect($this->server, $this->username, $this->pass, $this->database) or die("Connection not established");
        echo ("Connection established");
    }

    public function view_records()
    {
        $sql_query = "SELECT * FROM 'department_details';";
        $records = mysqli_query($this->conn, $sql_query);
    }
    public function insert_record()
    {

    }

}
$a = new crud();
