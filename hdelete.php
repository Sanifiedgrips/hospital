<?php
include "connect.php";
if(isset($_GET['hos_id'])){
     $hos_id=$_GET['hos_id'];
    $sql="SELECT * FROM `hospi` WHERE hos_id='$hos_id'";
     $result =mysqli_query($conn,$sql);
      $rows = mysqli_fetch_assoc($result);
        $filename="./image/".$rows['himage'];
        
        
        
            if(unlink($filename)){
    $query="DELETE FROM `hospi` WHERE hos_id='$hos_id'";
     $res=mysqli_query($conn,$query);
     header("location:HOSPITAL.php");
   }

      

    
}
?>