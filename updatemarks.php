<?php
include 'connect.php';
$student_id=$_GET['updateid'];
$sql="select * from `test marks` where student_id=$student_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$student_id=$row['student_id'];
$Kannada=$row['Kannada'];
$English=$row['English'];
$Hindi=$row['Hindi'];
$Mathematics=$row['Mathematics'];
$Science=$row['Science'];
$Social=$row['Social'];
$Total=$row['Total'];
$attendance=$row['attendance'];


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

  $sql="update `test marks` set student_id=$student_id,Kannada='$Kannada',English='$English',Hindi='$Hindi',Mathematics='$Mathematics',Science='$Science',Social='$Social',Total='$Total',attendance='$attendance' where student_id=$student_id  ";
 
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data updated successfully";
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
    <input type="text" class="form-control" placeholder="Enter student's id" name="student_id" value=<?php echo $student_id;?>>
  </div>
  <div class="form-group">
    <label>Kannada</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Kannada" value=<?php echo $Kannada;?>>
  </div>
  <div class="form-group">
    <label>English</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="English" value=<?php echo $English;?>>
  </div>
  <div class="form-group">
    <label>Hindi</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Hindi" value=<?php echo $Hindi;?>>
  </div>
  <div class="form-group">
    <label>Mathematics</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Mathematics" value=<?php echo $Mathematics;?>>
  </div>
  <div class="form-group">
    <label>Science</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Science" value=<?php echo $Science;?>>
  </div>
  <div class="form-group">
    <label>Social</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Social" value=<?php echo $Social;?>>
  </div>
  <div class="form-group">
    <label>Total</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="Total" value=<?php echo $Total;?>>
  </div>
  <div class="form-group">
    <label>Attendance</label>
    <input type="text" class="form-control" placeholder="Enter marks" name="attendance" value=<?php echo $attendance;?>>
  </div>
  </div></br>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  
</form>

  </div>
  </body>
</html>