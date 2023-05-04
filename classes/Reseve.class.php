<?php
class Reseve extends db
{
  public function update_room($start_date, $end_date, $type, $person_num)
  {
    $stmt = parent::tryConnect()->prepare("update almorshed_room set start_date = ? , end_date= ? where type=? and person_num=? and end_date < ?  ORDER BY end_date  LIMIT 1");
    $params = array($start_date, $end_date, $type, $person_num, $start_date);
    $execute_result = $stmt->execute($params);
    $stmt->fetch();
    if ($execute_result == true && $stmt->rowCount() >= 1) {
      header("location:index.php?the= booking is done");
      exit();
    } else {
      $g = $stmt->rowCount();
      header("location:index.php?hg=Ther is error $params[2] ");
      exit();
    }
  }
}
