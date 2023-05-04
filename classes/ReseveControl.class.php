<?php
class ReseveControl extends Reseve
{
  public $start_date, $end_date, $type, $person_num;

  public function __construct($start_date, $end_date, $type, $person_num)
  {
    $this->start_date = $start_date;
    $this->end_date = $end_date;
    $this->type = $type;
    $this->person_num = $person_num;
  }

  public function check_empty()
  {
    if (empty($this->start_date || $this->end_date || $this->type || $this->person_num)) 
    {
      return true;
    }
    else{ return false;}
  }
  private function clear_input($input)
  {
   
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }

  public function do_reseve()
  {
    // session_start();
    if($this->check_empty()==true)
    {
      header("location:index.php?fd=fssfsdfsf");
      exit();
      $_SESSION['erorr_message']="You must fill out all the filds";
      exit();
    }
    parent::update_room($this->clear_input($this->start_date),$this->clear_input($this->end_date),$this->clear_input($this->type),$this->clear_input($this->person_num));

  }
}
