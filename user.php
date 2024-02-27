<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $sname=$_POST['sname'];
  $sclass=$_POST['sclass'];
  $bdate=$_POST['bdate'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="insert into `student` (sname,sclass,bdate,gender,phone,address,email,password) values('$sname','$sclass','$bdate','$gender','$phone','$address','$email','$password')";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data inserted successfully";
    header('location:display.php');
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
    <label>sname</label>
    <input type="text" class="form-control" placeholder="Enter student's name" name="sname">
  </div>
  <div class="form-group">
    <label>sclass</label>
    <input type="text" class="form-control" placeholder="Enter student's class" name="sclass">
  </div>
  <div class="form-group">
    <label>bdate</label>
    <input type="text" class="form-control" placeholder="Enter student's date of birth" name="bdate">
  </div>
  <div class="form-group">
    <label>gender</label>
    <input type="text" class="form-control" placeholder="Enter student's gender" name="gender">
  </div>
  <div class="form-group">
    <label>phone</label>
    <input type="text" class="form-control" placeholder="Enter student's mobile number" name="phone">
  </div>
  <div class="form-group">
    <label>address</label>
    <input type="text" class="form-control" placeholder="Enter student's address" name="address">
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter student's email" name="email">
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" placeholder="Enter student's password" name="password">
  </div></br></br>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  
</form>

  </div>
  </body>
</html>