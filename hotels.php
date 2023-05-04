<?php
if (isset($_GET['hotel_id']) || isset($_GET['date_btn'])) {
  $start_date = date("Y-m-d");

  $end_date = Date('Y-m-d', strtotime('+1 days'));
  $person_num = 1;
  if (isset($_GET['start_date'])) {
    $start_date = $_GET['start_date'];

    $end_date = $_GET['end_date'];
    $person_num = $_GET['person_num'];
  }

  include("header.php"); ?>
  

  <div class="row m-0 p-0 ">
    <div class="col-12 m-0  p-0">


      <div class="welcome">

        <img src="img/royal-hotel.jpg" alt="" width="100%" height="100%">
        <div class="welcome-text">
          <h3>Welcome in jordan</h3>
          <p> You will get the bast exprinc in travling in our hotel, reserv now and star your jenery </p>
        </div>

      </div>

      <div class="trip_div ">
        <p class="trip_p">
          Get ready to be wowed by the sweeping desert of Wadi Rum, the hidden, hand-hewn facades of Petra and the ancient
          Roman ruins at Jerash on an 8-day journey through Jordan. Watch the sunset from your Bedouin camp,
          snorkel in the coral-clad Red Sea in Aqaba, float in the mineral-rich waters of the Dead Sea,
          traverse the narrow gorge of Siq in Petra and marvel at the unforgettable revelation of The Treasury.
          Venture through remarkable landscapes without forgoing familiar home-comforts on this upgraded journey through
          the jewel in the Middle Eastern crown.
        </p>
        <img class="trip_img" src="img/im1.jpg" alt="" width="50%">


      </div>
      <div class="trip_div ">
        <img class="trip_img" src="img/re1.jpeg" alt="" width="50%">
        <p class="trip_p">
          Let us take you on a journey back in time; the year 1921, a young doctor by the name of Fausto Tesio established the Italian
          Hospital in the heart of the new city near the ancient Roman Amphitheatre. Deeply inspired by her father’s great passion for Jordan,
          Flavia Romero took her Italian roots and planted them in Amman by opening Romero Restaurant in 1979.
          Flavia continued to add pieces of her culture to the restaurant, which grew to become a haven for Mediterranean cuisine in Jordan.
          In 1988, the legacy created by Romero was handed over to Mr. Zaid Goussous, whose passion and love for fine cuisine
          continues to drive his inspiration today. Goussous extended Romero’s legacy by growing the menu of homemade Italian recipes
          to include flavors from each of the country’s provinces. He had successfully maintained a small piece of Italy in the heart
          of our beloved Amman with its enchanting ambience and indulging cuisine.
        </p>


      </div>



    </div>
  </div>
  <div class='row m-0 p-0 '>


    <div class='col-10 m-0 p-0'>

      <?php
     
      $card = new Cardview();
      $card->show_room_byid($_GET['hotel_id'], $start_date, $person_num);
  
      if (isset($_SESSION['hotel_aviblty'])) {
       
        echo "<h1>$_SESSION[hotel_aviblty]: $start_date to $end_date</h1>";
        unset($_SESSION['hotel_aviblty']);
      } else {
   
        foreach ($card->show_room_byid($_GET['hotel_id'], $start_date, $person_num) as $value) {


          echo " 
        <div class='card mb-3' m-0 style='max-width: 1100px;'>
        <div class='row no-gutters'>
          
            <img src='$value[img_path]' alt='...' height='240px' width='380px'>
        
        
            <div class='card-body'style='width:40%;'>
              <h5 class='card-title'>$value[type]</h5>
              <p class='card-text' >$value[description]</p>
              <div class='row justify-content-center m-0' style='bottom: 2px;
              position: absolute;left: 63%;'>";
          if (isset($_SESSION['user_id'])) {
            echo "<a href='reservation.php?room_type=$value[type]' class='btn btn-primary'>reserv</a>";
          } else {
            echo "<a href='login.php' class='btn btn-primary'>reserv</a>";
          }

          echo "</div>
</div>
</div>
        
  </div>    ";
        }
      }
      ?>
      </div>
     

      <div class="col-2 pt-5 m-0" style="background-color: #bba4d1;">


        <form action="" method="get">
          <div class="card-body m-0 p-0">
            <div class="form-group ">
              <label class="form-group" for="start_date">Start date</label>
              <input class="form-group" name="start_date" type="date" id="start_date" min="<?php echo $start_date; ?>" value="<?php echo $start_date; ?>">

            </div>
            <div class="form-group ">
              <label class="form-group" for="end_date">End date </label>
              <input class="form-group" type="date" name="end_date" id="end_date" value="<?php echo $end_date; ?>">
            </div>
            persons: <input type="number" value="1" min="1" max="4" name="person_num">
            <input type="hidden" name="hotel_id" value="<?php echo $_GET['hotel_id']; ?>">
          </div>
          <br>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-primary" value="J" name="date_btn"> search</button>

          </div>
        </form>
      </div>
    </div>
  



















  <?php
  include("footer.php");
}
  ?>