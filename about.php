<?php include("admin/db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - ANUJ'S Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>



<div class="container my-5">
  <div class="text-center mb-4">
    <h2 class="fw-bold">About ANUJ'S Hotel</h2>
    <p class="text-muted">Luxury • Comfort • Trust</p>
  </div>

      <?php
    $q = mysqli_query($conn,"SELECT * FROM management_staff WHERE status=1");
    while($s = mysqli_fetch_assoc($q)){
    ?>
    <div>
      <img src="images/staff/<?php echo $s['photo']; ?>" width="100">
      <h5><?php echo $s['name']; ?></h5>
      <p><?php echo $s['role']; ?></p>
    </div>
    <?php }
     ?>


  <div class="row align-items-center">
    <div class="col-md-6">
      <p>
        Welcome to <b>ANUJ'S Hotel</b>, where luxury meets comfort.
        We provide premium rooms, world-class facilities, and a peaceful stay.
      </p>
      <p>
        Located in Mumbai, our hotel is trusted by hundreds of guests for
        quality service and hospitality.
      </p>
    </div>

    <div class="col-md-6">
      <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb"
           class="img-fluid rounded">
    </div>
  </div>
</div>

</body>
</html>
