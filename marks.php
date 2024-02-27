<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $student_id=$_POST['student_id'];
  $Kannada=$_POST['Kannada'];
  $English=$_POST['English'];
  $Hindi=$_POST['Hindi'];
  $Mathematics=$_POST['Mathematics'];
  $Science=$_POST['Science'];
  $Social=$_POST['Social'];
  $Total=$_POST['Total'];
  $attendance=$_POST['attendance'];
  $sql="insert into `test marks` (student_id,Kannada,English,Hindi,Mathematics,Science,Social,Total,attendance) 
  values('$student_id','$Kannada','$English','$Hindi','$Mathematics','$Science','$Social',' $Total','$attendance')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data inserted successfully";
    header('location:display1.php');
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
    <label>student_id</label>
    <input type="text" class="form-control" placeholder="Enter student's id" name="student_id" >
  </div>
  <div class="form-group">
    <label>Kannada</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Kannada">
  </div>
  <div class="form-group">
    <label>English</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="English">
  </div>
  <div class="form-group">
    <label>Hindi</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Hindi">
  </div>
  <div class="form-group">
    <label>Mathematics</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Mathematics">
  </div>
  <div class="form-group">
    <label>Science</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Science">
  </div>
  <div class="form-group">
    <label>Social</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Social">
  </div>
  <div class="form-group">
    <label>Total</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Total">
  </div>
  <div class="form-group">
    <label>Attendance</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="attendance">
  </div>
  
  </br></br>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
</form>

  </div>
  </body>
</html>