<?php
include "side2.php";
include "connect.php";
?>
<?php
$msg=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
  $hname=$_POST['hname'];
  $email=$_POST['email'];
  $pnum=$_POST['pnum'];
  $img=$_FILES['img']['name'];
  $tmp_name =$_FILES['img']['tmp_name'];

  $loc=$_POST['loc'];
  $dise=$_POST['dise'];
  $size =$_FILES['img']['size'];
  $allow_ext=['png','jpg','jpeg','svg','gif','webfile'];
  $allow_size=900*1024*1024;
  if($allow_size>=$size){
      $current_location='./image/'.$img;
      if(move_uploaded_file($tmp_name,$current_location)){
        $sql1="INSERT INTO `hospi`(hospitalname,email,Phonenumber,himage,location,Disease) VALUES('$hname','$email','$pnum','$img','$loc','$dise')";
        $result1=mysqli_query($conn,$sql1);
        if($result1){

        header("location:HOSPITAL.php");
        
      }else {
       
      $msg="Some thing went wrong";
        
      }

    } else{
       $msg='image did not insert';
    }

    }else{
        $msg="image size must be below 900 mb";

    }
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
  <?php
  if($msg){
    echo $msg;
  }
  ?>
   <h2 class="text-center mb-4">REGISTER OF HOSPITAL</h2>
  <form class="needs-validation" method="post" action="" enctype="multipart/form-data" novalidate>
    <div class="row mb-3">
      <div class="col-md-6">
        <label for="hospitalname" class="form-label">HOSPITAL NAME</label>
        <input type="text" name="hname" class="form-control" id="hospitalname" required>
        <div class="invalid-feedback">hospital name is required.</div>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="email" required>
        <div class="invalid-feedback">Please enter a valid email address.</div>
      </div>
    </div>

    <div class="mb-3">
      <label for="phonenumber" class="form-label">PHONENUMBER</label>
      <input type="text" name="pnum" class="form-control" id="phonenumber" required>
      <div class="invalid-feedback"> PHONENUMBER is required.</div>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">ADD HOSIPITAL LOGO</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="file" name="img" class="form-control" id="image" required>

      <div class="invalid-feedback">please add hospital logo required</div>
    </div>
 <div class="mb-3">
      <label for="address" class="form-label">LOCATION</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="address" name="loc" class="form-control" id="address" required>

      <div class="invalid-feedback">location is required.</div>
    </div>
<div class="mb-3">
      <label for="message" class="form-label">Disease</label>
      <!-- <textarea class="form-control" id="message" rows="4" required></textarea> -->
      <input type="text" name="dise" class="form-control" id="email" required>

      <div class="invalid-feedback">Disease is required</div>
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="terms" required>
      <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
      <div class="invalid-feedback">You must agree.</div>
    </div>

    <button class="btn btn-primary" type="submit">REGISTER</button>
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

