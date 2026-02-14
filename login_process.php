<?php
include("admin/db.php");
session_start();

$email = trim($_POST['email'] ?? '');
$pass  = $_POST['password'] ?? '';

if($email=="" || $pass==""){
  header("Location: login.php?msg=All fields required");
  exit();
}

$q = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($q);

if(!$user){
  header("Location: login.php?msg=Email not registered");
  exit();
}

if(!password_verify($pass, $user['password'])){
  header("Location: login.php?msg=Wrong password");
  exit();
}

if($user['is_verified'] == 0){
  header("Location: login.php?msg=Please verify your email first");
  exit();
}

/* LOGIN SUCCESS */
$_SESSION['user_login'] = true;
$_SESSION['user_id']    = $user['id'];
$_SESSION['user_name']  = $user['name'];

header("Location: index.php");
exit();
