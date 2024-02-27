<html>
<body>

  <title>Report Card</title>
  <style>
    /* CSS code goes here */
  form {
    width: 50%;
    margin: 0 auto;
    text-align: center;
}

input[type=text] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
  </style>
</head>
<body>
  

<form action="hosa.php" method="post">
  Student ID: <input type="text" name="student_id"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
