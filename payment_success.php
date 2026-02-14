<?php
session_start();
include("admin/db.php");

if(!isset($_SESSION['booking']) || !isset($_GET['pid'])){
  die("Invalid payment access");
}

$b = $_SESSION['booking'];
$pid = $_GET['pid'];

mysqli_query($conn,"INSERT INTO bookings
(room_name,name,email,phone,checkin,checkout,status,payment_id)
VALUES
('{$b['room_name']}','{$b['name']}','{$b['email']}','{$b['phone']}',
'{$b['checkin']}','{$b['checkout']}','Paid','$pid')");

unset($_SESSION['booking']);

echo "<h2 style='text-align:center;margin-top:100px'>
Payment Successful 🎉<br>
Booking Confirmed
</h2>";
?>
