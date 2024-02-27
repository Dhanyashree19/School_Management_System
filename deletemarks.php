<?php
include 'connect.php';
if(isset($_GET['deleteid'])){

    $student_id=$_GET['deleteid'];
    $sql="delete from `test marks` where student_id=$student_id";
    $result=mysqli_query($con,$sql);
    if($result)
  {
   // echo "Data deleted successfully";
   header('location:display1.php');
  }else{
    die(mysqli_error($con));
  }

}
?>