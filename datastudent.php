<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM  student_login";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$rows= $row['firstname'] . " " .$row['lastname']. " " .$row['email']. " " .$row['fathername']. " " .$row['course']
. " " .$row['gender']. " " .$row['dob']. " " .$row['mobno']. " " .$row['rollno']. " " .$row['section'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1 align="center">Student Data</h1>
        <table border="2" align="center">
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Father's Name</th>
            <th>Course</th>
            <th>Gender</th>
            <th>Date Of Birth</th>
            <th>Mobile No.</th>
            <th>Roll Number</th>
            <th>Section</th>
          </tr>
            <?php if ($row!=0){
                  while($row=mysqli_fetch_array($result))
                  {
                    echo "
                    <tr>
                    <td>".$row['firstname']."</td>
                    <td>".$row['lastname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['fathername']."</td>
                    <td>".$row['course']."</td>
                    <td>".$row['gender']."</td>
                    <td>".$row['dob']."</td>
                    <td>".$row['mobno']."</td>
                    <td>".$row['rollno']."</td>
                    <td>".$row['section']."</td>
                    </tr>
                    ";
                  }
                  
                }
                else{
                  echo "No Record Found";
                }
          ?>
        </table>
</body>
</html> 

       