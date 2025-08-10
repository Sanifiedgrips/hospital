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
<!-- <h1>DOCTOR RECORD</h1> -->
    <h2 class="text-center mb-4 p-2">DOCTOR RECORD</h2>
<div class="container p-1                                      ">

       <a href="doctorfoam.php" class="btn btn-success">
    <i class="bi bi-person-badge-fill me-2"></i> ADD DOCTOR 
  </a>
    </div>
  <div class="row g-4">
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card Title 1</h5>
          <p class="card-text">This is a responsive card. It adjusts to screen size using Bootstrap grid.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card Title 2</h5>
          <p class="card-text">Cards are stacked in rows, and responsive down to mobile screens.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>

 <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card Title 2</h5>
          <p class="card-text">Cards are stacked in rows, and responsive down to mobile screens.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="card h-100">
        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card Title 2</h5>
          <p class="card-text">Cards are stacked in rows, and responsive down to mobile screens.</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
  </div>
  
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
