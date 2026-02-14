<!DOCTYPE html>
<html>
<head>
  <title>User Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="text-center mb-4">Login</h2>

  <?php if(isset($_GET['msg'])){ ?>
    <div class="alert alert-danger text-center">
      <?php echo $_GET['msg']; ?>
    </div>
  <?php } ?>

  <form action="login_process.php" method="POST" class="col-md-5 mx-auto">

    <input type="email" name="email" class="form-control mb-3"
           placeholder="Email" required>

    <input type="password" name="password" class="form-control mb-3"
           placeholder="Password" required>

    <button class="btn btn-dark w-100">Login</button>

    <div class="text-center mt-3">
      <a href="forgot_password.php">Forgot Password?</a>
    </div>

  </form>
</div>

</body>
</html>
