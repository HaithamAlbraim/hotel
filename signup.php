<?php 
include("header.php");
if(isset($_SESSION['erorr_message']))
{
  echo $_SESSION['erorr_message'];
}
?>

<div class="row m-0 p-0">
<div class="col-6 m-0 p-0">
  <img src="img/login.jpg" alt="" width="100%" height="590px">
</div>

<div class="col-6 p-4" >
  <h2 style="text-align:center ;">signup</h2>
  <form action="includs/signup.inc.php" method="post"  class="form-div-signup">
    <div class="form-group" >
      <label for="first_name">first name</label>
      <input type="text" style="width:200px ; display:inline" class="form-control" id="first_name" name="first_name">
      <label for="last_name">last name</label>
      <input type="text" style="width:200px ;display:inline" class="form-control" id="last_name" name="last_name">
    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="user_name">User name</label>
      <input type="text" class="form-control" id="user_name" name="user_name">
    </div>
  <div class="form-group ">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
<div class="row justify-content-center mt-5" >
  <button type="submit" class="form-control" name="signUp_btn" id="form_btn" class="btn">Login</button>
  </div>
  <span>Have accont login  now <a href="login.php">Login </a></span>
</form>

</div>

</div>



<?php include("footer.php");?>


