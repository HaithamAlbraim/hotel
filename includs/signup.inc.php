<?php
if(isset($_POST['signUp_btn']))
{
  include("../autoload.php");

 
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $user_name=$_POST['user_name'];
  $password=$_POST['password'];
  $set= new UserControl();
  $set->do_signup($first_name,$last_name,$email,$user_name,$password);
  
}