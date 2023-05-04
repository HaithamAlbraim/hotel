<?php
if(isset($_POST['reseve']))
{
  include("../autoload.php");
  // session_start();
  $start_date=$_POST['start_date'];
  $end_date=$_POST['end_date'];
  $type=$_POST['room_type'];
  $person_num=$_POST['person_num'];
  $reseve= new ReseveControl( $start_date, $end_date, $type,$person_num);
  $reseve->do_reseve();
  echo   $reseve->do_reseve();
  

  if(isset($_SESSION['erorr_message']))
  {
    echo $_SESSION['erorr_message'];
  }
}