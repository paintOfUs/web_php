<?php
Class Connection{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "ShoppingDB";
    
    function Connect(){
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
//         echo("thanh cong");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    } 
}
?>