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
<link rel="stylesheet" type="text/css" href="order.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
  .box{
    border-top-color: var(--teal) !important;
  }
</style>

</head>
<body>

<?php require('inc/header.php'); ?>
    <div class="container">
        <h1>Payments Table</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Amount</th>
                    <th>Check Out</th>
                    <th>Check In</th>
                    <th>Hotel Name</th>
                    <th>Room Name</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'fetch_data.php'; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
