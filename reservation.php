<?php
include("header.php");
$date=date("Y-m-d");
$date2=Date('Y-m-d', strtotime('+1 days'));
?>
<div class="container-fluid">
  <div class="row ">
    <div class="col-12 ">
    <div class="d-flex align-items-center justify-content-center" id="form-div">

    <div class="card" style="width: 50%;">
  
   <h5>Resev Now</h5> 
  
  <div class="card-body">
  <form action="includs/do_reseve.inc.php" method="post" >
  <div class="form-group ">
<label class="form-group" for="start_date">Start date</label>
<input class="form-group" name="start_date" type="date" id="start_date" min="<?php echo $date;?>" value="<?php echo $date;?>">

</div>
<div class="form-group ">
<label class="form-group" for="end_date">End date  </label>
<input class="form-group" type="date" name="end_date" id="end_date" value="<?php echo $date2;?>">
</div>
    persons: <input type="number" value="1" min="1" max="4" name="person_num">
<h4>price:</h4>
<input type="hidden" name="room_type" value="<?php echo $_GET['room_type'];?>">
<div class="row justify-content-center">
<button type="submit" name="reseve" class="btn btn-primary">resev </button>
</div>
</form>
  </div>
</div>

</div>

</div>
  </div>
</div>
<?php
include('footer.php');
?>