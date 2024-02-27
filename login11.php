<?php
    include("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>LOGIN FORM</h1>
        <form name="form" action="loginn11.php" onsubmit="return isvalid()" method="POST">
            <label>Username: </label>
            <input type="email" id="user" name="email"></br></br>
            <label>Password: </label>
            <input type="password" id="pass" name="password"></br></br>
            <input type="submit" id="btn" value="Login" name="submit"/> 
        </form>
        
    </div> 
    <script>
        function isvalid(){
            var user= document.form.email.value;
            var pass= document.form.password.value;
            if(user.length=="" && pass.length==""){
                alert("Username and password field is empty!!!");
                return false
            }
            else{
                if(user.length=="" ){
                alert("Username field is empty!!!");
                return false
                }
                if(pass.length==""){
                alert("Password field is empty!!!");
                return false
                }
            }
        } 
    </script>
</body>
</html>