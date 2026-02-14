<?php
include("admin/db.php");

$room_id = $_GET['room_id'] ?? 0;

$q = mysqli_query($conn,"SELECT * FROM rooms WHERE id='$room_id'");
$r = mysqli_fetch_assoc($q);

if(!$r){
  die("Room not found");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Checkout - ANUJ HOTEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="mb-4">Checkout</h2>

  <div class="row">
    <div class="col-md-6">
      <h5>Room Details</h5>
      <p><b>Room:</b> <?= $r['room_name'] ?></p>
      <p><b>Price:</b> ₹<?= $r['price'] ?>/night</p>
    </div>

    <div class="col-md-6">
      <form action="booking_process.php" method="POST" class="shadow p-4 rounded">
        <input type="hidden" name="room_id" value="<?= $r['id'] ?>">

        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Phone</label>
          <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Check-in</label>
          <input type="date" name="checkin" class="form-control" required>
        </div>

        <div class="mb-3">
          <label>Check-out</label>
          <input type="date" name="checkout" class="form-control" required>
        </div>

        <button class="btn btn-success w-100">
          Proceed to Payment
        </button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
