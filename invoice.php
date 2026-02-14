<?php
include("admin/db.php");

$id = $_GET['id'];

$q = mysqli_query($conn,"
  SELECT b.*, r.room_name 
  FROM bookings b
  JOIN rooms r ON b.room_id=r.id
  WHERE b.id=$id
");

$b = mysqli_fetch_assoc($q);

header("Content-Type: application/pdf");
header("Content-Disposition: attachment; filename=invoice_$id.pdf");

echo "
HOTEL INVOICE

Booking ID: {$b['id']}
Room: {$b['room_name']}
Amount: ₹{$b['amount']}
Status: {$b['status']}
Date: {$b['created_at']}

Thank you for booking with us!
";
exit();
?>
