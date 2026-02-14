<?php
include("admin/db.php");

$email = $_POST['email'] ?? '';

$q = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($q);

if(!$user){
  header("Location: forgot_password.php?msg=Email not found");
  exit();
}

$token  = bin2hex(random_bytes(16));
$expiry = date("Y-m-d H:i:s", strtotime("+30 minutes"));

mysqli_query($conn,
  "UPDATE users SET reset_token='$token', reset_expiry='$expiry'
   WHERE email='$email'"
);

$link = "http://localhost:8080/hbwebsite/reset_password.php?token=$token";
@mail($email, "Password Reset", "Click link to reset password:\n$link");

header("Location: forgot_password.php?msg=Reset link sent to email");
exit();
