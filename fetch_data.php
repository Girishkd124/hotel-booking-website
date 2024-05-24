<?php
// Database connection
require('connection.php');
// session_start(); 
// Query to fetch data
$username = $_SESSION['username']; // Get the username from the session

$sql = "SELECT name, email, mobile_no, amount, check_out, check_in, hotel_name, room_name FROM payments WHERE name = '$username'";
$result = $con1->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["mobile_no"] . "</td>";
        echo "<td>" . $row["amount"] . "</td>";
        echo "<td>" . $row["check_out"] . "</td>";
        echo "<td>" . $row["check_in"] . "</td>";
        echo "<td>" . $row["hotel_name"] . "</td>";
        echo "<td>" . $row["room_name"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>No data found</td></tr>";
}
?>
