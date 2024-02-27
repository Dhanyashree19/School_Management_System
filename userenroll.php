<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $s_id=$_POST['s_id'];
    $sub_id=$_POST['sub_id'];
    $marks=$_POST['marks'];
    $attendance=$_POST['attendance'];
  
  $sql="insert into `enrolls` (s_id,sub_id,marks,attendance) values('$s_id','$sub_id','$marks','$attendance')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data inserted successfully";
    header('location:displayenrolls.php');
  }else{
    die(mysqli_error($con));
  }





}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <title>CRUD OPERATION</title>
    
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>s_id</label>
    <input type="text" class="form-control" placeholder="Enter student's id" name="s_id">
  </div>
  <div class="form-group">
    <label>sub_id</label>
    <input type="text" class="form-control" placeholder="Enter student's sub_id" name="sub_id">
  </div>
  <div class="form-group">
    <label>marks</label>
    <input type="text" class="form-control" placeholder="Enter student's marks" name="marks">
  </div>
  <div class="form-group">
    <label>attendance</label>
    <input type="text" class="form-control" placeholder="Enter student's gender" name="attendance">
  </div>
  
  </div>
</br>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
</form>

  </div>
  </body>
</html>