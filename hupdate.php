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

if($_SERVER['REQUEST_METHOD']=="POST"){
       $hos_id=$_POST['hos_id'];
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
      $sql="SELECT * FROM `hospi` WHERE hos_id='$hos_id'";
       $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
            $filename= $current_location.$rows['img'];
            unlink($filename);
      $current_location='./image/'.$img;
      if(move_uploaded_file($tmp_name,$current_location)){
  $sql="UPDATE  `hospi` SET hospitalname='$hname',email='$email',Phonenumber='$pnum',himage='$img',location='$loc',Disease='$dise' WHERE hos_id='$hos_id'";
       
 $result1=mysqli_query($conn,$sql);
        if($result1){

        header("location:HOSPITAL.php");
        
      }else {
       
      $msg="Some thing went wrong";
        
      }

    } else{
       $msg='image did not updated';
    }

    }else{
        $msg="image size must be below 900 mb";

    }
      }
?>