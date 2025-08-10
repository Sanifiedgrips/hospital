
<?php
// include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bootstrap 5 Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="stylesheet" href="styling.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar ">
    <h4 class="text-center ">Dashboard</h4>
   <a href="dashboard.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-house me-2"></i>Dashboard</a>
  <a href="HOSPITAL.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-hospital me-2"></i>HOSPITAL</a>
  <a href="DOCTOR.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-person-badge me-2"></i>DOCTOR</a>
  <a href="VACCINATION.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-shield-fill-plus"></i></i> VACCINATION</a>
  <a href="TREATMENT.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-clipboard2-pulse me-2"></i>TREATMENT</a>
  <a href="PATIENT.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-people me-2"></i>PATIENT</a>
  <a href="Profile.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-person me-2"></i>Profile</a>
  <a href="Settings.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-gear me-2"></i>Settings</a>
  <a href="#" class="sidebar-link d-block text-white mb-2"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>
  </div>

  <!-- Top Navbar -->
  <nav class="navbar navbar-expand navbar-dark bg-dark px-4 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
    </div>
  </nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
