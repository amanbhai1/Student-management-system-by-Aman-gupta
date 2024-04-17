
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
$sql="SELECT * FROM student_login";
$result = mysqli_query($conn,$sql);
$row= mysqli_num_rows($result);
$rows = $row-1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Sidebar</title>
  <style>
    body {
  margin: 0px;
  padding: 0px;
  font-family:'Courier New', Courier, monospace   
}

.sidebar {
  height: 100%;
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #219ebc;
  overflow-x: hidden;
  padding-top: 20px;
  color: white;
}

.sidebar a {
  padding: 10px 30px;
  text-decoration: none;
  font-size: 18px;
  color: #ddd;
  display: block;
  margin-top: 20px;
}

.sidebar a:active {
  color: #f5f529;
  background-color: #575757;
}

.sidebar a:hover {
  color: #60f529;
  background-color: #fb8500;
}

.sidebar .header {
  background-color: #219ebc;
  margin-bottom: 30px;
}
.sidebar .header img{
  height: 40px;
  width: 40px;
  border-radius: 50%;
}

.sidebar h2:hover {
  background-color: #e9c46a; 
  color: #023047;
  border-radius: 10px;
}


.sidebar .header img {
  display: block;
  margin: 10px auto;
  border-radius: 50%;
  text-align: left;
}

.sidebar .header h2 {
  margin: 20px 20px;
  padding: 10px;
  font-size: 25px;
  text-align: center;
}

.sidebar .header hr{
  width: 260px;
  height: 8px;
  background-image: linear-gradient(grey,white);
}

  
.content {
  margin-left: 260px;
  height: 100vh;
  background-color: #ecf0f4;

}

.links hr{
  width: 200px;
  color: rgb(255, 255, 255);
}

.top_header{
  height: 65px;
  width: 1110px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 260px;
  background-color: white;
  overflow-x: hidden;
  padding-top: 20px;
  color: black;
 
}
.top_header h3{
  margin-left:10px;
  font-size: 20px;
  position: absolute;
  top: -8px;
  padding: 23px;
}
.top_header h3:hover{
  background-color: #6cff43;
  border-radius: 10px;
}

.top_header p{
  font-size: 20px;
  position: absolute;
  right: 60px;
  top: -2px;
  }

.top_header img{
  height: 40px;
  width: 40px;
  border-radius: 50%;
}




.centercontent{
    background-color: white;
    height: 350px;
    width:  980px;
    margin: auto;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    position: absolute;
    top: 25%;
    left: 25%;
}

.centercontent h3{
    font-size: 30px;
    text-align: center;
    text-decoration: underline;
    color: rgb(63, 254, 63);
}

.centercontent p{
    font-size: 20px;
    text-align: center;
    
}
.centercontent a{
    text-decoration: none;
    position: absolute;
    bottom: 30px;
    right: 80px;
}
  </style>
  <script src="https://kit.fontawesome.com/d8e93f7b79.js" crossorigin="anonymous"></script>

</head>
<body>

  <div class="sidebar">
    <div class="header">
      <h2><img src="face8.png"><br> <u>Admin</u></h2>
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
        <h3>Hello,Welcome To Dashboard</h3>
    </div>
    <div class="centercontent">
        <h3>Report Summary</h3>
        <hr>
        <p>Total Students:<?php echo $rows; ?></p>
        <a href="datastudent.php"><i class="fa-solid fa-eye"></i> View Students</a>
    </div>
</div>

</body>
</html>
