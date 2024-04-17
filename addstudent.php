<?php 
error_reporting(0);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$fathername = $_POST['fathername'];
$course = $_POST['course'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$mobno = $_POST['mobno'];
$rollno = $_POST['rollno'];
$section = $_POST['section'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$conn = new mysqli('localhost','root','','student');
if ($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
}
else{
    $sql = $conn->prepare("insert into student_login(firstname,lastname,email,fathername,course,gender,dob,mobno,rollno,section,username,password)values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssssssssisss", $firstname,$lastname,$email,$fathername,$course,$gender,$dob,$mobno,$rollno,$section,$username,$password);
    $sql->execute();
    $a="Registration Successful......";
    
    $sql->close();
    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <script src="https://kit.fontawesome.com/d8e93f7b79.js" crossorigin="anonymous"></script>
    <style>
        *{
    margin: 0px;
    padding: 0px;
}

body {
    background-color: #ecf0f4;
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
    top: 12px;
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


.formcontent{
    height:auto;
    width: 70%;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 100px;
    background-color: white;
    border-radius: 10px;
}

.formcontent h2{
    text-align: center;
    padding-top: 40px;
    text-decoration: underline;
    font-size: 30px;
}

.formcontent input{
    width: 90%;
    padding: 10px;
    margin: 20px;
    border-radius: 5px;
    border: 1px solid grey;
}

.formcontent select{
    width: 92%;
    padding: 10px;
    margin: 20px;
    border-radius: 5px;
    border: 1px solid grey;
}

.formcontent form{
    font-size: 22px;
    margin-left: 20px;
}

.formcontent button{
    width: 300px;
    background-color: rgb(235, 255, 54);
    margin-left: 30%;
    padding: 10px;
    font-size: 18px;
    border-radius: 7px;    
}
    </style>
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
        <h3>Hello,Welcome To Dashboard</h3>
    </div>

    <div class="formcontent">
        <h2>ADD STUDENT</h2>
        <form action="" method="POST">
            
            First Name:<br>
            <input type="text" name="firstname">
            <br>

            Last Name:<br>
            <input type="text" name="lastname">
            <br>

            Student Email:<br>
            <input type="email" name="email">
            <br>

            Father's Name:<br>
            <input type="text" name="fathername">
            <br>
            Course:<select name="course" id="" >
            <option value="B.tech" name="course">B.tech</option>
            <option value="BCA" name="course">BCA</option>
            <option value="BBA" name="course">BBA</option>
            <option value="B.com" name="course">B.com</option>
            <option value="BA" name="course">BA</option>
            <option value="BSC" name="course">BSC</option>
            </select>
            <br>

            Gender:<select name="gender" id="">
            <option value="M" name="gender">Male</option>
            <option value="F" name="gender">Female</option>
            <option value="O" name="gender">Other</option>
            </select>
            <br>
            Student DOB: <br>
            <input type="date" name="dob">

            Mobile Number<br>
            <input type="text" name="mobno">
            <br>
            
            Student Rollno:<br>
            <input type="number" name="rollno">
            <br>
            
            Student Section:<br>
            <input type="text" name="section">
            <br>
            
            <h2>Login Details</h2>
            Username:
            <br>
            <input type="text" name="username">
            <br>
            Password:
            <br>
            <input type="password" name="password">
            <br>
            <button type="submit" name="studentdata">Submit form</button>
            
            <br>
            <br>
            <p><?php echo $a ?></p>
        </form>
    </div>
</body>
</html>

