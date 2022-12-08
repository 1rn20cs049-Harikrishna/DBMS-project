<?php


class Db_Connection {

   private $server;
   private $user;
   private $password;
   private $database;
   public $conn; 

   function __construct(){
       $this->server = 'localhost';
       $this->user   = 'root';
       $this->password = '';
       $this->database = 'db';
   }

  function Establish_Connection(){
    $this->conn = new mysqli($this->server,$this->user,$this->password,$this->database);

   if($this->conn->connect_error){
      die("Connection failed ".$this->conn->connect_error);
  }
  //echo 'Connected successfully'; 
  return $this->conn;
  }


}



?>