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


</head>
<body>

<?php require('inc/header.php'); ?>

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>

  <div class="h-line bg-dark"></div>
 
</div>

<!-- check avilability form-->
<div class="container availability-form mb-5">
 	<div class="row">
 		<div class="col-lg-12 bg-white shadow p-4 rounded">
 			<h5 class="col-lg-3">Check Booking Availability</h5>
 			<form action="manege.php" method="POST">
 				<div class="row align-items-end">
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-in</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Check-out</label>
 						<input type="date" class="form-control shadow-none">
 					</div>
 					<div class="col-lg-3 mb-3">
 						<label class="form-label" style="font-weight: 500;">Location</label>
 						<select class="form-select shadow-none" name="selectedValue">
             <option value="none" selected disabled hidden>Select an Option</option>
  						<option value="mumbai">Mumbai</option>
  						<option value="Delhi">Delhi</option>
  						<option value="Goa">Goa</option>
						</select>
 					</div>
 					
 					<div class="col-lg-1 mb-lg-3 mt-2">
 						<button type="submit" class="btn text-black btn-outline-success">Submit</button>
 					</div>
          

 				</div>
 			</form>
 		</div>
 	</div>
 </div>


<?php  
     require('connection.php');
     if(isset($_SESSION['SelectedValue']))
     {
      $type=$_SESSION['SelectedValue'];
      $sql = "SELECT * FROM `hotels` WHERE `location`='$type'";
      $result = $con1->query($sql);
      // unset($_SESSION['SelectedValue']);
      require('hotel.php'); 
     }elseif (isset($_SESSION['hotel_name'])) {
      $sql = "SELECT * FROM `rooms`";
      $result = $con1->query($sql);
      require('room.php');
     }
     else{
      $sql = "SELECT * FROM hotels";
      $result = $con1->query($sql);
      require('hotel.php');
     }
 ?> 




 
 
<?php require('inc/footer.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>