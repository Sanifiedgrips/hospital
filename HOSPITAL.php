<?php
include "side2.php";
include "connect.php";
?>
<?php
$sql = "SELECT * FROM hospi";
$result = mysqli_query($conn,$sql);

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

       <a href="foamhospital.php" class="btn btn-primary">
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
              <th>Email</th>
              <th>PHONENUMBER</th>
              <th>LOGO</th>

              <th>LOCATION </th>
              <th>Disease</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php
          if(mysqli_num_rows($result)>0){
            while($rows=mysqli_fetch_assoc($result)){
                
        
          ?>
          <tbody>
            <tr>                                                                                         
              <td><?= htmlspecialchars($rows['hos_id']) ?></td>
              <td><?= htmlspecialchars($rows['hospitalname']) ?></td>
              <td><?= htmlspecialchars($rows['email']) ?></td>
              <td><?= htmlspecialchars($rows['Phonenumber']) ?></td>
              <td><img src="./image/<?= htmlspecialchars($rows['himage']) ?>" alt="hospital"   style="width: 70px; height: 70px; object-fit: cover; border-radius: 60%;"></td>
              <td><?= htmlspecialchars($rows['location']) ?></td>
              <td><?= htmlspecialchars($rows['Disease']) ?></td>
              <td><a class="btn btn-primary btn-md " href="">Edit</a><a class="btn btn-danger btn-md" href="">DELETE</a></td>

            </tr>
            <?php
              }
          }
          ?>
          </tbody>
        
        </table>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
