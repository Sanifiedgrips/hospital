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
<h1>HOSPITAL RECORD</h1>
<div class="container mt-5">          
    <div class="container p-1                                      ">

       <a href="#" class="btn btn-primary">
    <i class="bi bi-hospital me-2"></i> ADD HOSPITAL
  </a>
    </div>
  
                                                   
    <div class="card-body"> 
      <!-- Responsive wrapper -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle mb-0">
          <thead class="table-light">
            <tr>
              <th>#</th>
              <th>HOSPITAL NAME</th>
              <th>LOCATION </th>
              <th>Disease</th>
              <th>Doctor</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Ahmed Khan</td>
              <td>45</td>
              <td>Diabetes</td>
              <td>Dr. Aslam</td>
              <td>2025-08-01</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Fatima Bano</td>
              <td>33</td>
              <td>Flu</td>
              <td>Dr. Sara</td>
              <td>2025-08-02</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ali Raza</td>
              <td>29</td>
              <td>Injury</td>
              <td>Dr. Usman</td>
              <td>2025-08-03</td>
            </tr>
          </tbody>
        </table>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
