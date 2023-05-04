<?php
if(isset($_GET['country_id']))
{
include("header.php");



?>

<!-- <div class="container-fluid"> -->
  <div class="row p-0 m-0"> 
    <div class="col-12 p-0">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/dead-sea.jpg" class="d-block w-100"  height="400px" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4>Jordan</h4>
        <h4> Dead sea</h4>
        <p>The Dead Sea  also known by other names, is a salt lake bordered by Jordan t and the West Bank to the west. It lies in the Jordan Rift Valley, and its main tributary is the Jordan River.</p>
      
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/patra.jpg" class="d-block w-100" alt="..." height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>he siq opens up onto Petras most magnificent façade; the Treasury, or Al Khazna. It is almost 40 meters high and intricately decorated with Corinthian capitals, friezes, figures and more.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/wadi-rum.jpg" class="d-block w-100" alt="..." height="400px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<br>
<?php 
$hotel_info=new Cardview;
foreach($hotel_info->show_card_byid("almorshed_hotels","country_id",$_GET['country_id']) as $value)
{
  echo"


  <div class='card mb-3' style='max-width: 1100px;'>
  <div class='row no-gutters'>
    
      <img src='$value[img_path]' alt='...' height='240px' width='380px'>
  
  
      <div class='card-body'style='width:50%;'>
        <h5 class='card-title'>$value[hotel_name]</h5>
        <p class='card-text' >$value[description]</p>
        <div class='row justify-content-center m-0' style='bottom: 2px;
        position: absolute;left: 63%;'>
        <a href='hotels.php?hotel_id=$value[id]' class='btn btn-primary'>Show detals</a>
      
      </div>
    </div>
  </div>
</div>";}
?>

</div>
</div>
<!-- </div> -->
<?php include("footer.php");}?>