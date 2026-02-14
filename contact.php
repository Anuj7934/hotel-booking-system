<?php if(isset($_GET['success'])){ ?>
  <div class="alert alert-success text-center">
    Message sent successfully!
  </div>
<?php } ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - ANUJ'S Hotel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>


<div class="container my-5">
  <h2 class="text-center mb-4 fw-bold">Contact Us</h2>

  <div class="row">

    <div class="col-md-6 mb-4">
      <h5>Address</h5>
      <p>Mumbai, Maharashtra, India</p>

      <h5>Phone</h5>
      <p>+91 9082773998</p>

      <h5>Email</h5>
      <p>panuj4658@gmail.com</p>

      <h5>Follow Us</h5>
      <p>
        <i class="bi bi-facebook me-2"></i>
        <i class="bi bi-instagram me-2"></i>
        <i class="bi bi-twitter"></i>
      </p>
    </div>

    <div class="col-md-6 mb-4">
      
            <form action="contact_process.php" method="POST"
            class="shadow p-4 rounded bg-white">

        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name"
                class="form-control shadow-none" required>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email"
                class="form-control shadow-none" required>
        </div>

        <div class="mb-3">
          <label>Message</label>
          <textarea name="message"
                    class="form-control shadow-none"
                    rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-dark w-100">
          Send
        </button>

      </form> 

    </div>

  </div>

  <div class="mt-4">
    <iframe 
      src="https://www.google.com/maps?q=Mumbai,India&output=embed"
      width="100%" 
      height="300" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy">
    </iframe>
  </div>

</div>

</body>
</html>
