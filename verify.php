<?php
include("admin/db.php");

$token = $_GET['token'] ?? '';

$q = mysqli_query($conn,
  "SELECT * FROM users WHERE verification_token='$token'"
);

if(mysqli_num_rows($q)==1){

  mysqli_query($conn,
    "UPDATE users SET
     is_verified=1,
     verification_token=NULL
     WHERE verification_token='$token'"
  );

  echo "<h2>Email verified successfully!</h2>
        <a href='login.php'>Login Now</a>";

}else{
  echo "<h2>Invalid or expired verification link</h2>";
}
