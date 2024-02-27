<?php
include'connect.php';
if(isset($_POST['submit1'])){
    header('location:login11.php');  
}
if(isset($_POST['submit2'])){
    header('location:login.php');  
}
if(isset($_POST['submit3'])){
    header('location:updates.php');  
}
if(isset($_POST['submit4'])){
    header('location:contactus.php');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY SCHOOL</title>
    <link rel="stylesheet" type="text/css" href="stylep.css">
</head>
<body>
    <header>
    <FORM method="POST">
    <div class="main">
        <div class="logo">
            <img src="logo.png">
        </div>
            <ul>
                <li class="active"><button type="Updates" class="btn" name="submit3">Home</button></li>
                <li><button type="Updates" class="btn" name="submit3">Updates</button></li>
                <li><button type="Contact Us" class="btn" name="submit4">Contact Us</button></li>
            </ul>
        </div>
        <div class="title">
            <h1>MY SCHOOL</h1>
        </div>
        <div div class="button">
            <button type="PARENT LOGIN" class="btn" name="submit1">PARENT LOGIN</button>
            <button type="TEACHER LOGIN" class="btn" name="submit2">TEACHER LOGIN</button> 
        </div>
    </FORM>
    </header>
</body>
</html>
