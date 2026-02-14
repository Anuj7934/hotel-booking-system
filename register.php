<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
<h2 class="text-center mb-4">Create Account</h2>

<?php
if(isset($_GET['msg']) && isset($_GET['status'])){
  $class = ($_GET['status']=='success') ? 'alert-success' : 'alert-danger';
?>
  <div class="alert <?php echo $class; ?> text-center">
    <?php echo htmlspecialchars($_GET['msg']); ?>
  </div>
<?php } ?>


<form action="register_process.php" method="POST" class="col-md-5 mx-auto">

  <input type="text" name="name" class="form-control mb-3"
         placeholder="Full Name" required>

  <input type="email" name="email" class="form-control mb-3"
         placeholder="Email Address" required>

  <input type="password" name="password" class="form-control mb-3"
         placeholder="Password" required>

  <button class="btn btn-dark w-100">Register</button>
</form>
</div>

</body>
</html>
