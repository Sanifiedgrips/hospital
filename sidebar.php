<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HPS</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f8f9fa;
    }
    .offcanvas-start {
      background-color: #212529;
      color: #fff;
    }
    .sidebar-link {
      color: #adb5bd;
      padding: 0.75rem 1rem;
      display: flex;
      align-items: center;
      text-decoration: none;
    }
    .sidebar-link:hover {
      background-color: #343a40;
      color: #fff;
    }
    .sidebar-link i {
      margin-right: 0.75rem;
    }
  </style>
</head>
<body>

  <!-- Top Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="btn btn-outline-light me-2" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
        <i class="bi bi-list"></i>
      </button>
      <a class="navbar-brand" href="#">HOSPITAL MANAGEMENT SYSTEM</a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">HOSPITAL MANAGE</h5>
      <button type="button" class="btn-close  btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
    
  <a href="dashboard.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-house me-2"></i>Dashboard</a>
  <a href="HOSPITAL.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-hospital me-2"></i>HOSPITAL</a>
  <a href="DOCTOR.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-person-badge me-2"></i>DOCTOR</a>
  <a href="VACCINATION.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-shield-fill-plus"></i></i>VACCINATION</a>
  <a href="TREATMENT.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-clipboard2-pulse me-2"></i>TREATMENT</a>
  <a href="PATIENT.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-people me-2"></i>PATIENT</a>
  <a href="Profile.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-person me-2"></i>Profile</a>
  <a href="Settings.php" class="sidebar-link d-block text-white mb-2"><i class="bi bi-gear me-2"></i>Settings</a>
  <a href="#" class="sidebar-link d-block text-white mb-2"><i class="bi bi-box-arrow-right me-2"></i>Logout</a>


    </div>
  </div>

  <!-- Main Content -->
  <!-- <main class="container py-4">
    <h1>Welcome</h1>
    <p>This is a modern sidebar layout using Bootstrap 5 and Bootstrap Icons.</p>
  </main> -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
