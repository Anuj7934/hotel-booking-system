<?php
session_start();

$_SESSION['booking'] = [
  'room_id' => $_POST['room_id'],
  'name' => $_POST['name'],
  'email' => $_POST['email'],
  'phone' => $_POST['phone'],
  'checkin' => $_POST['checkin'],
  'checkout' => $_POST['checkout'],
  'price' => $_POST['price']
];

header("Location: pay.php");
exit();
