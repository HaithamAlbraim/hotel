<?php
class UserControl extends User
{
  public function do_login($user_name, $password)
  {
   session_start();
  //  $_SESSION['erorr_message'] ="";
    if ($this->check_empty($user_name, $password) === true) {
      $_SESSION['erorr_message'] = "invalid user name or password";
      header("location:../login.php");
      exit();
    }
    parent::get_user($this->clear_input($user_name), $this->clear_input($password));
  }

  private function check_empty($user_name, $password)
  {
    $result = "";
    if (empty($user_name || $password)) {
      $result = true;
    } else {
      $result = false;
    }
    return $result;
  }

  private function clear_input($input)
  {
    $input;
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }

public function do_signup($first_name,$last_name,$email,$user_name,$password)
{
parent::set_user($first_name,$last_name,$email,$user_name,$password);
}

}
