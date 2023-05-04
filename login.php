<?php 
include("header.php");
 
?>

<div class="row m-0 p-0">
<div class="col-6 m-0 p-0">
  <img src="img/login.jpg" alt="" width="100%" height="590px">
</div>

<div class="col-6 p-4" >
  <h2 style="text-align:center ;">Login</h2>
  <form action="includs/login.inc.php" method="post"  class="form-div-login">
  <div class="form-group">
    <label for="user_name">User name</label>
    <input type="text" class="form-control" id="user_name" name="user_name">
  </div>
  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <br>

<div class="row justify-content-center mt-5" >
  <button type="submit" class="form-control" id="form_btn" name="login_btn" 
   class="btn">Login</button>
  </div>
  <span>dont have accont sign up now <a href="signup.php">sign up</a></span>
</form>
<?php if(isset($_SESSION['erorr_message']))
{
  echo $_SESSION['erorr_message'];
  $_SESSION['erorr_message']="";
}?>
</div>

</div>



<?php include("footer.php");?>


