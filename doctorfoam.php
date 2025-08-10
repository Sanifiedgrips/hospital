<?php
include "side2.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="stylesheet" href="styling.css">
</head>
<body>



  <!-- Main Content -->
  <div class="main-content pt-5 mt-3">
<!-- <h1>welcome to dashboard</h1> -->
    <div class="container">
   <h2 class="text-center mb-4">REGISTER OF DOCTOR</h2>
  <form class="needs-validation" novalidate>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="firstName" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstName" required>
        <div class="invalid-feedback">First name is required.</div>
      </div>
      <div class="col-md-6">
        <label for="lastName" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastName" required>
        <div class="invalid-feedback">Last name is required.</div>
      </div>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" required>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="email" class="form-control" id="email" required>

      <div class="invalid-feedback">Please enter a message.</div>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms" required>
      <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
  </form>
</div>


</div>
  </div>
<script>
  // Bootstrap validation script
  (function () {
    'use strict'
    const forms = document.querySelectorAll('.needs-validation')
    Array.from(forms).forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
  })()
</script>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
