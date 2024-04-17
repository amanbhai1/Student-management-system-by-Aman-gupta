
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
  <title>Dashboard Sidebar</title>
  <link rel="stylesheet" href="admindashboard.css">
  <script src="https://kit.fontawesome.com/d8e93f7b79.js" crossorigin="anonymous"></script>

</head>
<body>

  <div class="sidebar">
    <div class="header">
      <h2><img src="face8.png"> <u>Admin</u></h2>
      <hr>
    </div>
    <div class="links">
    <a href="admindashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a><hr>
    <a href="addstudent.php"><i class="fa fa-group"></i>Add Student</a><hr>
    <a href="managestudent.php"><i class="fa fa-group"></i>Manage Students</a><hr>
    <a href="searchstudent.php"><i class="fa fa-search"></i> Search student</a><hr>
    <a href="updatestudent.php"><i class="fa-solid fa-pen-to-square"></i> Update student</a><hr>
    <a href="deletestudent.php"><i class="fa-regular fa-delete-left"></i> Delete student</a><hr>
    <a href="homepage.php"><i class="fas fa-sign-out-alt"></i> Log out</a><hr>
    </div>
  </div>

  <div class="content">
    <div class="top_header">
        <h3>Hello,Welcome Student Data</h3>
    </div>
    <div class="centercontent">
        <h3>Report Summary</h3>
        <b><a href="datastudent.php"><i class="fa-solid fa-eye"></i> View Students</a></b>
        <hr>
        <p>Students Data:</p>
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
                  while($row=mysqli_fetch_assoc($result))
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
        
    </div>
</div>

</body>
</html>
