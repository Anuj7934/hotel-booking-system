<?php
include("admin/db.php");

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header("Location: register.php");
  exit();
}

$name  = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$pass  = $_POST['password'] ?? '';

if($name=="" || $email=="" || $pass==""){
  header("Location: register.php?msg=All fields are required&status=error");
  exit();
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  header("Location: register.php?msg=Invalid email&status=error");
  exit();
}

/* DUPLICATE CHECK */
$check = mysqli_query($conn,
  "SELECT id FROM users WHERE email='$email' LIMIT 1"
);

if(mysqli_num_rows($check) > 0){
  header("Location: register.php?msg=Email already registered&status=error");
  exit();
}

/* HASH + TOKEN */
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
$token = bin2hex(random_bytes(16));

/* INSERT */
$insert = mysqli_query($conn,
  "INSERT INTO users(name,email,password,verification_token)
   VALUES('$name','$email','$hashed_pass','$token')"
);

if(!$insert){
  header("Location: register.php?msg=Something went wrong&status=error");
  exit();
}

/* SUCCESS */
header("Location: register.php?msg=Check your email to verify account&status=success");
exit();
