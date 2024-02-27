<?php
include 'connect.php';
if(isset($_GET['deleteid'])){

    $s_id=$_GET['deleteid'];
    $sql="delete from `student` where s_id=$s_id";
    $result=mysqli_query($con,$sql);
    if($result)
  {
   // echo "Data deleted successfully";
   header('location:display.php');
  }else{
    die(mysqli_error($con));
  }

}
?>