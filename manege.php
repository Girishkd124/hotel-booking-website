<?php 
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
    if (isset($_POST["selectedValue"])) {
        // Get the selected value
        $selectedValue = $_POST["selectedValue"];
        $_SESSION['SelectedValue']=$_POST["selectedValue"];
        echo"
        <script>
        window.location.href='booking.php';
        </script>
        ";

    }

    if (isset($_POST["hotel_name"])) {
        // Get the selected value
        // $selectedValue = $_POST["selectedValue"];
        // $_SESSION['SelectedValue']=$_POST["selectedValue"];
        $_SESSION['hotel_name']=$_POST["hotel_name"];
        unset($_SESSION['SelectedValue']);
        echo"
        <script>
        window.location.href='booking.php';
        </script>
        ";

    } 
    if (isset($_POST["room_name"])) {
        // Get the selected value
        // $selectedValue = $_POST["selectedValue"];
        // $_SESSION['SelectedValue']=$_POST["selectedValue"];
        $_SESSION['room_name']=$_POST["room_name"];
        unset($_SESSION['SelectedValue']);
        $_A=$_SESSION['hotel_name'];
        $_B=$_SESSION['room_name'];
        echo"
        <script>
        window.location.href='payment/index.php';
        </script>
        ";

    } 

}
?>
  <!-- window.location.href='booking.php'; -->
