<?php
class User extends db
{
 

protected function get_user($user_name,$password)
{
  session_start();
  $stmt=parent::tryConnect()->prepare("select * from almorshed_users where user_name=? and password=?");
  $params=[$user_name,$password];
  $result=$stmt->execute($params);
  if($result==0|| $stmt->rowCount()==0)
  {
    $_SESSION['erorr_message']="invalid user name or password";
    header("location:../login.php");
    exit();
  }

  $row=$stmt->fetchAll();
  if($password!==$row[0]['password'])
  {
    $_SESSION['erorr_message']="invalid user name or password";
    header("location:../login.php");
    exit();
  }

 
  
  $_SESSION['user_id']=$row[0]['user_id'];
}

protected function set_user($first_name,$last_name,$email,$user_name,$password)
{session_start();
  $stmt=parent::tryConnect()->prepare("select user_id from almorshed_users where user_name =?");
  $params=array($user_name);
  $execute_result=$stmt->execute($params);
  if($execute_result==0|| $stmt->rowCount() == 1)
  {
    $_SESSION['erorr_message']="Try athor user name";
    header("location:../signup.php");
    
    exit();
  }
  $stmt=parent::tryConnect()->prepare("insert into almorshed_users (first_name,last_name,email,user_name,password) values (?,?,?,?,?)");
  $params=array($first_name,$last_name,$email,$user_name,$password);
  $execute_result=$stmt->execute($params);
  $r=$stmt->rowCount();
  if($execute_result==1)
  {
    $_SESSION['message']="The user is ready login now";
    header("location:../index.php");
    exit();
  }
  else var_dump($execute_result);
}

}