<?php

class CardM extends db
{
 public  function get_card_info()
 {
  $stmt=$this->tryConnect()->prepare("select * from almorshed_country");
  $result=$stmt->execute();
  $card_info=$stmt->fetchAll();
  return $card_info;
 }
public function get_data_byid($table,$colum,$id)
{
  $stmt=parent::tryConnect()->prepare("select * from {$table} where {$colum}=?");
  $result=$stmt->execute([$id]);
  if($result>0)
  {
  $card_info=$stmt->fetchAll();
  return $card_info;
  }
  else return "Ther is no aviable hotels now";
}

public function get_room_byid($id,$start_date,$person_num)
{	
  $stmt=parent::tryConnect()->prepare("select * from almorshed_room where hotel_id=? and end_date < ? and person_num =? group by type");
  
  $execute_result=$stmt->execute([$id,$start_date,$person_num]);
  if($execute_result>0)
  {
  $result=$stmt->fetchAll();
if($stmt->rowCount()>0)
{
  return $result;
  exit();

}

else{
// session_start();
$_SESSION['hotel_aviblty']="Thier is no empty room from";

}


  }
  
  
}

}

