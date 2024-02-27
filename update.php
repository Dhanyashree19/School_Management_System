<?php
include 'connect.php';
$s_id=$_GET['updateid'];
$sql="select * from `student` where s_id=$s_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$sname=$row['sname'];
$sclass=$row['sclass'];
$bdate=$row['bdate'];
$gender=$row['gender'];
$phone=$row['phone'];
$address=$row['address'];
$email=$row['email'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $sname=$_POST['sname'];
  $sclass=$_POST['sclass'];
  $bdate=$_POST['bdate'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  $sql="update `student` set s_id=$s_id,sname='$sname',sclass='$sclass',bdate='$bdate',gender='$gender',phone='$phone',address='$address',email='$email',password='$password' where s_id=$s_id";
  $result=mysqli_query($con,$sql);
  if($result)
  {
    //echo "Data updated successfully";
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
    <input type="text" class="form-control" placeholder="Enter student's name" name="sname" value=<?php echo $sname;?>>
  </div>
  <div class="form-group">
    <label>sclass</label>
    <input type="text" class="form-control" placeholder="Enter student's class" name="sclass" value=<?php echo $sclass;?>>
  </div>
  <div class="form-group">
    <label>bdate</label>
    <input type="text" class="form-control" placeholder="Enter student's date of birth" name="bdate" value=<?php echo $bdate;?>>
  </div>
  <div class="form-group">
    <label>gender</label>
    <input type="text" class="form-control" placeholder="Enter student's gender" name="gender" value=<?php echo $gender;?>>
  </div>
  <div class="form-group">
    <label>phone</label>
    <input type="text" class="form-control" placeholder="Enter student's mobile number" name="phone" value=<?php echo $phone;?>>
  </div>
  <div class="form-group">
    <label>address</label>
    <input type="text" class="form-control" placeholder="Enter student's address" name="address" value=<?php echo $address;?>>
  </div>
  <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" placeholder="Enter student's email" name="email" value=<?php echo $email;?>>
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control" placeholder="Enter student's password" name="password" value=<?php echo $password;?>>
  </div></br></br>
  
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
  
</form>

  </div>
  </body>
</html>