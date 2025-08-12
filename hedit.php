<?php
include "side2.php";
?>
<?php
include "connect.php";
if(isset($_GET['hos_id'])){
    $hos_id=$_GET['hos_id'];
    $sql="SELECT * FROM `hospi` WHERE hos_id='$hos_id'";
$result =mysqli_query($conn,$sql);
$rows = mysqli_fetch_assoc($result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FOAM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 <link rel="stylesheet" href="styling.css">
</head>
<body>



  <!-- Main Content -->
  <div class="main-content pt-5 mt-3">
<div class="container">
  
   <h2 class="text-center mb-4">REGISTER OF HOSPITAL</h2>
  <form class="needs-validation" method="post" action="hupdate.php" enctype="multipart/form-data" novalidate>
    <div class="row mb-3">
        <input type="hidden"  value="<?php echo $rows['hos_id'] ?>" name="hos_id" class="form-control"    id="hospitalname" >
        
      <div class="col-md-6">
        <label for="hospitalname" class="form-label">HOSPITAL NAME</label>
        <input type="text"  value="<?php echo $rows['hospitalname'] ?>" name="hname" class="form-control" id="hospitalname" >

      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email address</label>
        <input type="email" value="<?php echo $rows['email'] ?>" name="email" class="form-control" id="email" >
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>
    </div>

    <div class="mb-3">
      <label for="phonenumber" class="form-label">PHONENUMBER</label>
      <input type="text" value="<?php echo $rows['Phonenumber'] ?>" name="pnum" class="form-control" id="phonenumber" >
      <div class="invalid-feedback"> PHONENUMBER is required.</div>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">ADD HOSIPITAL LOGO</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="file" value="<?php echo $rows['himage'] ?>" name="img" class="form-control" id="image" >

      <div class="invalid-feedback">please add hospital logo required</div>
    </div>
 <div class="mb-3">
      <label for="address" class="form-label">LOCATION</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="address" value="<?php echo $rows['location'] ?>" name="loc" class="form-control" id="address" >

      <div class="invalid-feedback">location is required.</div>
    </div>
<div class="mb-3">
      <label for="message" class="form-label">Disease</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="text" value="<?php echo $rows['Disease'] ?>" name="dise" class="form-control" id="email">

      <div class="invalid-feedback">Disease is required</div>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms" required>
      <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
      <div class="invalid-feedback">You must agree.</div>
    </div>

    <button class="btn btn-success" type="submit">UPDATE</button>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

