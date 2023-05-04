<?php

class db
{
 private $server_name="localhost";
 private $user_name="root";
 private $password="";
 private $database_name="learn";

protected function tryConnect(){
 try {
  $pdo= new PDO("mysql:host=$this->server_name;dbname=$this->database_name","$this->user_name","$this->password");
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 }
 catch(PDOException $e)
{
  echo "not connected".$e->getMessage();
  die();
}
return $pdo;
}

}