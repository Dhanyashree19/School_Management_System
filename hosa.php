<html>
<head>
  <title>REPORT CARD</title>
  <style>
  
  table {
    border-collapse: collapse;
    width: 50%;
    align-items: center;
}

th, td {
    border: 3px solid black;
    padding: 10px;
    text-align: centre;
}

th {
    background-color: pink;
}

h1, h2 {
    text-align: left;
}
  </style>
</head>
<body>
  

<?php


// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "crud");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve student data from the database
$student_id = $_POST['student_id'];
$sql = "SELECT * FROM `test marks`,`student` WHERE `test marks`.student_id = student.s_id and student_id=$student_id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output student data
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h1>REPORT CARD</h1>";
        echo "<h2>Name: ". $row["sname"] . "</h2>";
        echo "<h2>Class: ".$row["sclass"]."</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Subject</th>";
        echo "<th>Grade</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Kannada</td>";
        echo "<td>" . $row["Kannada"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<tr>";
        echo "<td>English</td>";
        echo "<td>" . $row["English"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Hindi</td>";
        echo "<td>" . $row["Hindi"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Mathematics</td>";
        echo "<td>" . $row["Mathematics"] . "</td>";
        echo "</tr>";
        echo "<td>Science</td>";
        echo "<td>" . $row["Science"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Social</td>";
        echo "<td>" . $row["Social"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Total</td>";
        echo "<td>" . $row["Total"] . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Attendance</td>";
        echo "<td>" . $row["attendance"] . "</td>";
        echo "</tr>";
        echo "</table>";
        
    }
} else {
    echo "No student data found.";
}

// Close connection
mysqli_close($conn);

?>

</body>
</html>
