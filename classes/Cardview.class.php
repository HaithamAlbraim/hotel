<?php
class Cardview extends CardM
{
  public function show_card_info()
  {
    return parent::get_card_info();
  }

  public function show_card_byid($table, $colum, $id)
  {
    return parent::get_data_byid($table, $colum, $id);
  }

  public function show_room_byid($id,$start_date,$person_num)
  {
    return parent::get_room_byid($id,$start_date,$person_num);
  }
}
