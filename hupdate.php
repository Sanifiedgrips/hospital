<?php
include "connect.php";
if(isset($_FILES['img'])){
    if($_SERVER['REQUEST_METHOD']=="POST"){
         $hos_id=$_POST['hos_id'];
  $hname=$_POST['hname'];
  $email=$_POST['email'];
  $pnum=$_POST['pnum'];
  $loc=$_POST['loc'];
  $dise=$_POST['dise'];
  $sql="UPDATE  `hospi` SET hospitalname='$hname',email='$email',Phonenumber='$pnum',location='$loc',Disease='$dise' WHERE hos_id='$hos_id'";
  $result=mysqli_query($conn,$sql);
        if($result){
             header("location:HOSPITAL.php?message=Data update successfully");
        }else{
          // echo"not update";
        }


}
}
?>