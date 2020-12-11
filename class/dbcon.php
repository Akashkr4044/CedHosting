<?php

  class DB{
  public $dbhost="localhost";
  public $dbuser="root";
  public $dbpass="";
  public $dbname="CedHosting";
  public $conn;

   function __construct(){
    $this->conn=new mysqli("localhost","root", "", "CedHosting");
    if ($this->conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

	}

   }
   
  }



?>