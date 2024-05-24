<div class="container">
        <!-- Repeat the following structure for each product -->
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="card mb-4 border-0 shadow m-5">
<div class="row g-0 p-3 align-items-center">
<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
<img src="images/rooms/1.jpg" class="img-fluid rounded">
</div>
<div class="col-md-5 px-lg-3 px-md-3 px-0">
<h5 class="mb-3"><?php echo $row['room_name']; ?></h5>
<div class="features mb-4">
    <h6 class="mb-1">Features</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      2 Rooms
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Bathroom
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      1 Balcony
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      3 Sofa
    </span>
  </div>
  <div class="Facilities mb-3">
    <h6 class="mb-1">Facilities</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Wifi
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Television
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      AC
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      Room Heater
    </span>
  </div>
  <div class="guests">
    <h6 class="mb-1">Guests</h6>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      5 Adults
    </span>
    <span class="badge rounded-pill bg-light text-dark text-wrap">
      4 Children
    </span>
  </div>  
</div>
<div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
<h6 class="mb-4">Ꝛ2000 per night </h6>
<form action="manege.php" method="POST">
    <input type="hidden" name="room_name" value="<?php echo $row['room_name']; ?>">
    <button type="submit" class="btn btn-sm w-100 btn-outline-success">Book now</button>
    <!-- <a href="" class="btn btn-sm w-100 btn-outline-dark shadow-none">More details</a> -->
</form>

<!-- <a href="#" class="btn btn-sm w-100 btn-outline-success">Book Now</a> -->
</div>
</div>
</div>
        <?php
        }
        ?>
        <!-- Repeat end -->
    </div>
