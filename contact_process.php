<?php if(isset($_GET['success'])){ ?>
  <div class="alert alert-success text-center">
    Message sent successfully!
  </div>
<?php } ?>

<?php if(isset($_GET['error'])){ ?>
  <div class="alert alert-danger text-center">
    Please fill all fields.
  </div>
<?php } ?>

<?php
include("admin/db.php");

// Agar form submit nahi hua, to kuch bhi mat dikhao
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
  header("Location: contact.php");
  exit();
}

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

if($name === '' || $email === '' || $message === ''){
  header("Location: contact.php?error=1");
  exit();
}

$q = mysqli_query($conn,
  "INSERT INTO contact_messages(name,email,message)
   VALUES('$name','$email','$message')"
);

if($q){
  header("Location: contact.php?success=1");
  exit();
}else{
  echo "DB Error: " . mysqli_error($conn);
}
