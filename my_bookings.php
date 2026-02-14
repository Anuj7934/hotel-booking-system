<?php
session_start();
include("admin/db.php");

if(!isset($_SESSION['user_login'])){
  header("Location: login.php");
  exit();
}

$uid = $_SESSION['user_id'];

$q = mysqli_query($conn,"
  SELECT b.*, r.room_name 
  FROM bookings b
  JOIN rooms r ON b.room_id = r.id
  WHERE b.user_id = $uid
  ORDER BY b.id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Bookings</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container my-5">
  <h3 class="mb-4">My Bookings</h3>

  <?php if(mysqli_num_rows($q)==0){ ?>
    <div class="alert alert-warning">No bookings found.</div>
  <?php } else { ?>

  <table class="table table-bordered bg-white shadow">
    <tr>
      <th>Room</th>
      <th>Amount</th>
      <th>Status</th>
      <th>Date</th>
    </tr>

    <?php while($b = mysqli_fetch_assoc($q)){ ?>
    <tr>
      <td><?php echo $b['room_name']; ?></td>
      <td>₹<?php echo $b['amount']; ?></td>
      <td>
        <?php
          echo ($b['status']=="Paid")
          ? "<span class='text-success'>Paid</span>"
          : "<span class='text-danger'>Pending</span>";
        ?>
      </td>
      <td><?php echo date("d M Y", strtotime($b['created_at'])); ?></td>
    </tr>
    <?php } ?>

  </table>

  <?php } ?>

  <a href="profile.php" class="btn btn-secondary mt-3">Back to Profile</a>
</div>

</body>
</html>
