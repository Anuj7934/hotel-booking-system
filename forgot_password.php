<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
  <h2 class="text-center mb-4">Forgot Password</h2>

  <?php if(isset($_GET['msg'])){ ?>
    <div class="alert alert-info text-center">
      <?php echo $_GET['msg']; ?>
    </div>
  <?php } ?>

  <form action="forgot_password_process.php" method="POST"
        class="col-md-5 mx-auto">

    <input type="email" name="email" class="form-control mb-3"
           placeholder="Enter your registered email" required>

    <button class="btn btn-dark w-100">Send Reset Link</button>
  </form>
</div>

</body>
</html>
