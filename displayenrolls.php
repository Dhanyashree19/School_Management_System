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
<button  class="btn btn-primary my-5"> <a href="userenroll.php" class="text-light">Add marks</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">s_id</th>
      <th scope="col">sub_id</th>
      <th scope="col">marks</th>
      <th scope="col">attendance</th>
    </tr>
  </thead>
  <tbody>
<?php

$sql="select * from `enrolls`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $s_id=$row['s_id'];
        $sub_id=$row['sub_id'];
        $marks=$row['marks'];
        $attendance=$row['attendance'];
        echo '<tr>
        <th scope="row">'.$s_id.'</th>
        <td>'.$sub_id.'</td>
        <td>'.$marks.'</td>
        <td>'.$attendance.'</td>
        <td>
       
        <button class="btn btn-danger"><a href="deletenrolls.php? deleteid='.$s_id.'" class="text-light">DELETE</a></button></br></br>
        
        </td>
      </tr>';
          
    }
    
}



?>

  
  
</tbody>
</table>
</body>

</html>