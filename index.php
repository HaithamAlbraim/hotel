<?php

include("header.php");
if(isset($_SESSION['message']))
{
  echo $_SESSION['message'];
unset($_SESSION['message']);
}
?>
<img src="img/main_img.jpg" alt=""  width="100%" height="200px">
<br>

<div class="row p-0 m-0">
 
 <?php 

 $cardinfo=new Cardview();
 foreach($cardinfo->show_card_info() as $value)
 {
  echo"
  <div class='card col-4 m-0 p-0'>
  <a href='country.php?country_id=$value[id]'>
  <img src='$value[img_path]' class='card-img-top' alt='...' height='300px' width='300px' title='Click to view'>
  </a>
  <div class='card-body'>
    <h5 class='card-title'>$value[country]</h5>
    <p class='card-text'>$value[description]</p>
  </div>

  </div>";}
  
  
 ?>

  </div>
  
  
  <?php include("footer.php");?>
  
  
