<?php
include("admin/db.php");

$token = $_GET['token'] ?? '';

$q = mysqli_query($conn,
  "SELECT * FROM users
   WHERE reset_token='$token'
   AND reset_expiry > NOW()"
);

if(mysqli_num_rows($q) != 1){
  die("Invalid or expired reset link");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="text-center mb-4">Reset Password</h2>

  <form action="reset_password_process.php" method="POST"
        class="col-md-5 mx-auto">

    <input type="hidden" name="token" value="<?php echo $token; ?>">

    <input type="password" name="password" class="form-control mb-3"
           placeholder="New Password" required>

    <button class="btn btn-dark w-100">Update Password</button>
  </form>
</div>

</body>
</html>
