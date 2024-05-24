<!DOCTYPE html>
<html>
<head>
	<title>Star-hotel</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .pop:hover{
    border-top-color: var(--teal) !important;
    transform: scale(1.03);
    transition: all 0.3s;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR FACILITIES</h2>

  <div class="h-line bg-dark"></div>
  <p class="text-center mt-3">
    Experience unparalleled luxury with our exceptional facilities, crafted to cater to your every need. From rejuvenating spa treatments to world-class dining options, our hotel offers an unforgettable escape from the ordinary, promising a stay that is nothing short of extraordinary.
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Wifi</h5>
        </div>  
          <p>
          Enjoy seamless connectivity with our lightning-fast Wi-Fi, keeping you effortlessly online throughout your stay.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <<img src="images/Facilities/restaurant.png" width="80px">
 			<h5 class="mt-3">Restaurant</h5>
        </div>  
          <p>
          Dive into action at our premier sports club, offering top-notch facilities and a vibrant atmosphere for fitness enthusiasts of all levels.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/Facilities/golf.png" width="80px">
 			<h5 class="mt-3">Sports CLub</h5>
        </div>  
          <p>
          Dive into relaxation at our pristine swimming pool, where crystal-clear waters and serene surroundings await your every splash.
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/Facilities/swimming-pool.png" width="80px">
 			<h5 class="mt-3">Swimming Pool</h5>
        </div>  
          <p>
          Unwind in style at our chic bar, where expertly crafted cocktails and a vibrant ambiance set the stage for unforgettable evenings
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
        <img src="images/Facilities/bar.png" width="80px">
 			<h5 class="mt-3">Bar</h5>
        </div>  
          <p>
          Unwind in style at our chic bar, where expertly crafted cocktails and a vibrant ambiance set the stage for unforgettable evenings
          </p> 
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
        <div class="d-flex align-items-center mb-2">
          <img src="images/facilities/Wifi.svg" width="40px">
          <h5 class="m-0 ms-3">Wifi</h5>
        </div>  
          <p>
           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
           tempor incididunt ut labore et dolore magna aliqua.
          </p> 
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>