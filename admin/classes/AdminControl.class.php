<?php
class AdminControl extends Admin
{
  public $userName, $password;
  public function __construct($userName, $passwrod)
  {
    $this->userName = $userName;
    $this->password = $passwrod;
  }

public function checkEmpty()
{
  $result="";
  if(empty($this->userName||$this->password))
  {$result=true; }
  else {$result=false;}
  return $result;

}

public function clearInput($input)
{
  $input=trim($input);
  $input=stripslashes($input);
  $input=htmlspecialchars($input);
  return $input;
}

public function doLogin()
{
  if($this->checkEmpty()==true)
  {
    $_SESSION['error_message']="can not be empty filds";
    header("location:index.php");
    exit();
  }
  else{
    parent::getAdmin($this->clearInput($this->userName),$this->clearInput($this->password));
  }
}


}
