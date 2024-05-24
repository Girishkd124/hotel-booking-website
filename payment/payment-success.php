


<?php
session_start(); // Start the session to access session variables

// Database connection parameters
   $con1= mysqli_connect("localhost", "root", "", "star_hotel");
   if(mysqli_connect_error()) {
      die("Connection failed: " . mysqli_connect_error());
   }  


if(isset($_GET)){
    // Retrieve session variables
    $billing_name = isset($_SESSION['name']) ? $_SESSION['name'] :"";
    $billing_mobile = isset($_SESSION['mobile']) ? $_SESSION['mobile'] : '';
    $billing_email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
    $amount = isset($_SESSION['amount']) ? $_SESSION['amount'] : '';
    $check_out = isset($_SESSION['check_out']) ? $_SESSION['check_out'] : '';
    $check_in = isset($_SESSION['check_in']) ? $_SESSION['check_in'] : '';
    $hotel_name = isset($_SESSION['hotel_name']) ? $_SESSION['hotel_name'] : '';
    $room_name = isset($_SESSION['room_name']) ? $_SESSION['room_name'] : '';
    
    // Insert into database
    $sql = "INSERT INTO payments (name, email, mobile_no, amount, check_out, check_in, hotel_name, room_name) 
            VALUES ('$billing_name', '$billing_email', '$billing_mobile', '$amount', '$check_out', '$check_in', '$hotel_name', '$room_name')";
    
    if ($con1->query($sql) === TRUE) {
        // Payment inserted successfully
        echo json_encode(['res' => 'success', 'message' => 'Payment data inserted into database']);
    } else {
        // Error inserting payment data
        echo json_encode(['res' => 'error', 'message' => 'Error inserting payment data into database: ' . $conn->error]);
    }
    
    // Close database connection
    echo"
    <script>
    window.location.href='../orders.php';
    </script>
    ";
}
?>