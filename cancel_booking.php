<?php
session_start();
include("admin/db.php");

if(!isset($_SESSION['user_login'])){
  header("Location: login.php");
  exit();
}

$uid = $_SESSION['user_id'];
$id = $_GET['id'];

mysqli_query($conn,"
  UPDATE bookings 
  SET status='Cancelled' 
  WHERE id=$id AND user_id=$uid
");

header("Location: my_bookings.php");
exit();
?>
