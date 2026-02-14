<?php if(isset($_GET['success'])){ ?>
  <div class="alert alert-success text-center">
    Booking request sent successfully!
  </div>
<?php } ?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Room</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="text-center mb-4">Room Booking</h2>

  <form action="booking_process.php" method="POST" class="col-md-6 mx-auto">

    <input type="hidden" name="room_name" value="Deluxe Room">
    <input type="hidden" name="price" value="2500">

    <input type="text" name="name" class="form-control mb-3"
           placeholder="Your Name" required>

    <input type="email" name="email" class="form-control mb-3"
           placeholder="Your Email" required>

    <input type="text" name="phone" class="form-control mb-3"
           placeholder="Phone Number" required>

    <label>Check-in</label>
    <input type="date" name="checkin" class="form-control mb-3" required>

    <label>Check-out</label>
    <input type="date" name="checkout" class="form-control mb-3" required>

    <button class="btn btn-dark w-100">Confirm Booking</button>
  </form>
</div>

</body>
</html>
