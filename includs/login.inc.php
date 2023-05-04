<?php

if(isset($_POST['login_btn']))
{
  
  include("../autoload.php");
$user_name=$_POST['user_name'];
$password=$_POST['password'];

$userlog= new UserControl();
$userlog->do_login($user_name,$password);
header("location:../index.php");
exit();



}
