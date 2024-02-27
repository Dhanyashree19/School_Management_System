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
<button  class="btn btn-primary my-5"> <a href="marks.php" class="text-light">Add marks</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">student_id</th>
      <th scope="col">Kannada</th>
      <th scope="col">English</th>
      <th scope="col">Hindi</th>
      <th scope="col">Mathematics</th>
      <th scope="col">Science</th>
      <th scope="col">Social</th>
      <th scope="col">Total</th>
      <th scope="col">Attendance</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from `test marks`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $student_id=$row['student_id'];
        $Kannada=$row['Kannada'];
        $English=$row['English'];
        $Hindi=$row['Hindi'];
        $Mathematics=$row['Mathematics'];
        $Science=$row['Science'];
        $Social=$row['Social'];
        $Total=$row['Total'];
        $attendance=$row['attendance'];
        echo '<tr>
        <th scope="row">'.$student_id.'</th>
        <td>'.$Kannada.'</td>
        <td>'.$English.'</td>
        <td>'.$Hindi.'</td>
        <td>'.$Mathematics.'</td>
        <td>'.$Science.'</td>
        <td>'.$Social.'</td>
        <td>'.$Total.'</td>
        <td>'.$attendance.'</td>
        <td>
        <button class="btn btn-primary"><a href="updatemarks.php? updateid='.$student_id.'" class="text-light">UPDATE</a></button>
        <button class="btn btn-danger"><a href="deletemarks.php? deleteid='.$student_id.'" class="text-light">DELETE</a></button></br></br>
        
        </td>
      </tr>';
          
    }
    
}



?>

  
  
</tbody>
</table>
</body>

</html>