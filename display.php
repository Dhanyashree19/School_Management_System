<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
    crossorigin="anonymous">
    <title>CRUD OPERATION</title>
</head>
<body>
<div class="container ">
<button  class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add student</a></button>
<button class="btn btn-primary"><a href="display1.php? marksid='.$s_id.'" class="text-light">Reportcard Data</a></button>
<button class="btn btn-primary"><a href="displayenrolls.php? marksid='.$s_id.'" class="text-light">Marks/attendance</a></button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">s_id</th>
      <th scope="col">sname</th>
      <th scope="col">sclass</th>
      <th scope="col">bdate</th>
      <th scope="col">gender</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">operation</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from `student`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $s_id=$row['s_id'];
        $sname=$row['sname'];
        $sclass=$row['sclass'];
        $bdate=$row['bdate'];
        $gender=$row['gender'];
        $phone=$row['phone'];
        $address=$row['address'];
        $email=$row['email'];
        $password=$row['password'];
        echo '<tr>
        <th scope="row">'.$s_id.'</th>
        <td>'.$sname.'</td>
        <td>'.$sclass.'</td>
        <td>'.$bdate.'</td>
        <td>'.$gender.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? updateid='.$s_id.'" class="text-light">UPDATE</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$s_id.'" class="text-light">DELETE</a></button></br></br>
        
        </td>
      </tr>';
        
        
    }
    
  }



?>

    
    
  </tbody>
</table>
</body>

</html>