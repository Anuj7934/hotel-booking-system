<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Rooms - ANUJ'S Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>


<div class="container my-5">
  <h2 class="text-center mb-4 fw-bold">Our Rooms</h2>

  <div class="row">

    <!-- Room 1 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow">
        <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39"
             class="card-img-top" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5>Deluxe Room</h5>

          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-half text-warning"></i>
          </div>

          <p>₹ 2500 / night</p>

          <a href="#" class="btn btn-dark btn-sm">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Room 2 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow">
        <img src="https://images.unsplash.com/photo-1560448204-e02f11c3d0e2"
             class="card-img-top" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5>Luxury Room</h5>

          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
          </div>

          <p>₹ 4000 / night</p>

          <a href="#" class="btn btn-dark btn-sm">Book Now</a>
        </div>
      </div>
    </div>

    <!-- Room 3 -->
    <div class="col-md-4 mb-4">
      <div class="card shadow">
        <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa"
             class="card-img-top" style="height:220px; object-fit:cover;">
        <div class="card-body">
          <h5>Suite Room</h5>

          <div class="mb-2">
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star-fill text-warning"></i>
            <i class="bi bi-star text-warning"></i>
          </div>

          <p>₹ 6000 / night</p>

              <a href="book.php" class="btn btn-dark btn-sm">Book Now</a>
              <a href="checkout.php?room_id=<?= $row['id'] ?>" 
      class="btn btn-dark btn-sm">
      Book Now
             </a>

        </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>
