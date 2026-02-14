<?php
session_start();
$b = $_SESSION['booking'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Pay Now</title>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>

<button id="payBtn">Pay Now ₹<?= $b['price'] ?></button>

<script>

var options = {
  "key": "rzp_test_SCRRCMemV5CQju",
  "amount": "50000", // test ₹500
  "currency": "INR",
  "name": "ANUJ HOTEL",
  "description": "Room Booking",
  "handler": function (response){
    window.location.href =
      "payment_success.php?pid=" + response.razorpay_payment_id;
  },
  "theme": {
    "color": "#198754"
  }
};

var rzp = new Razorpay(options);

document.getElementById('payBtn').onclick = function(e){
  rzp.open();
  e.preventDefault();
}


</script>

</body>
</html>
