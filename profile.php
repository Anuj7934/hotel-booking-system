<?php
session_start();
include("admin/db.php");

if(!isset($_SESSION['user_login'])){
  header("Location: login.php");
  exit();
}

$uid = $_SESSION['user_id'];

$q = mysqli_query($conn,"SELECT * FROM users WHERE id=$uid");
$user = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
  <div class="card shadow p-4 mx-auto" style="max-width:500px;">
    <h3 class="text-center mb-4">My Profile</h3>

    <p><b>Name:</b> <?php echo $user['name']; ?></p>
    <p><b>Email:</b> <?php echo $user['email']; ?></p>

    <p>
      <b>Status:</b>
      <?php echo ($user['is_verified']==1) ? "Verified ✅" : "Not Verified ❌"; ?>
    </p>

    <a href="my_bookings.php" class="btn btn-dark w-100 mt-3">
      My Bookings
    </a>

    <a href="logout.php" class="btn btn-outline-danger w-100 mt-2">
      Logout
    </a>
  </div>
</div>

</body>
</html>
