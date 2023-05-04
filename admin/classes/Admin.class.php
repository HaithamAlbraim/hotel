<?php

class Admin extends db
{

  public function getAdmin($userName,$password)
  {
    $stmt=parent::tryConnect()->prepare("SELECT * FROM almorshed_users WHERE user_name=? and password=? and role=?");
    $params=array($userName,$password,"1");
    $execute_result=$stmt->execute($params);
    session_start();
    if($stmt->rowCount()!=1)
    {
     $_SESSION['error_message']="invlaid user name or password";
     header("location:../index.php");
     exit();


    }
    else{
      $result=$stmt->fetch();
      $_SESSION['id']=$result['id'];
      header("location:../dashboard.php");
      exit();

    }
    
  }

}