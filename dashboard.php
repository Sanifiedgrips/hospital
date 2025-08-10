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
<h1>welcome to dashboard</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card text-bg-primary mb-3">
            <div class="card-body">
               <h5 class="card-title">
          <i class="bi bi-person-fill me-2"></i>Total Patients
        </h5>
              <p class="card-text fs-4">1234</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">
          <i class="bi bi-person-badge-fill me-2"></i>Total Doctors
        </h5>
              <p class="card-text fs-4">340</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-danger mb-3">
            <div class="card-body">
                <h5 class="card-title">
          <i class="bi bi-calendar-check-fill me-2"></i>Total Appointments
        </h5>
              <p class="card-text fs-4">340</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-bg-secondary mb-3">
            <div class="card-body">
              <h5 class="card-title">
          <i class="bi bi-hospital-fill me-2"></i>Total Hospitals
        </h5>
              <p class="card-text fs-4">78</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
