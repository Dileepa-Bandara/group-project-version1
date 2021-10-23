<?php

class Database
{

    //database connection
    private $dsn = "mysql:host=localhost;dbname=2102_test;";
    private $dbuser = "root";
    private $dbpass = "";

    public $conn;
    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->dbuser, $this->dbpass);
            echo 'Successful connection';
        } catch (PDOException $error) {
            echo 'ERROR' . $error->getMessage();
        }
        return $this->conn;
    }

    //check input
    public function checkInput($data)
    {
        //trim,remove whitespaces
        $data = trim("$data");
        //remove slashes
        $data = stripslashes("$data");
        //remove html tags
        $data = htmlspecialchars("$data");

        return $data;
    }

    //show message functions
    public function showMessages($type, $message)
    {
        return "div class='message'>.$message</div>";
    }
}
// $connection = new Database();
