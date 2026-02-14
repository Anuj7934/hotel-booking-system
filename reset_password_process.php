<?php
include("admin/db.php");

$token = $_POST['token'];
$pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);

$q = mysqli_query($conn,
  "SELECT * FROM users WHERE reset_token='$token'
   AND reset_expiry > NOW()"
);

if(mysqli_num_rows($q) != 1){
  die("Invalid request");
}

mysqli_query($conn,
  "UPDATE users SET
   password='$pass',
   reset_token=NULL,
   reset_expiry=NULL
   WHERE reset_token='$token'"
);

echo "<h2>Password updated successfully</h2>
      <a href='login.php'>Login Now</a>";
