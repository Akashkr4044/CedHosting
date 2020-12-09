<?php

Class Order{
public $siteurl = "http://localhost/CedHosting/";
public $dbhost = "localhost";
public $dbuser = "root";
public $dbpass = "";
public $dbname = "CedHosting";

function __construct(){
// Create connection

    $this->conn = new mysqli("localhost","root", "", "CedHosting");

    // Check connection
    if ($this->conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // echo 'Connection Estbalished';
}
}
$obj=new Order();
?>
