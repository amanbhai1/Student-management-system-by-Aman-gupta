<!DOCTYPE html>
<html>
<head>
    <title>Update Student Details</title>
    <style>
    *{
    margin: 0px;
    padding: 0px;
    background-color: #ECF0F4;
}
 
h2{
    text-align: center;
    font-size: 40px;
    color: #EED3D9;
    background-color: rgb(83, 199, 253);
    height: 60px;
    padding: 15px;
    text-decoration: underline;
}

.formm{
    margin: auto;
    width: 100%;
    height: 100%;
    font-size: 25px;
    background-color: white;
}

.formcontent{
    width: 100%;
    height: 100px;    
}
.formm{
    height:100%;
    width: 70%;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 50px;
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
    border-radius: 20px;     
    border: 2px solid black; 
    padding: 10px;  
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
    <script src="https://kit.fontawesome.com/d8e93f7b79.js" crossorigin="anonymous"></script>
</head>
<body>

    <?php
    error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['update'])){
        $rollno1= $_POST['rollno'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $fathername = $_POST['fathername'];
        $dob = $_POST['dob'];
        $course = $_POST['course'];
        $gender = $_POST['gender'];
        $mobno = $_POST['mobno'];
        $section = $_POST['section'];

        
        $sql = "UPDATE student_login SET firstname='$firstname', lastname='$lastname', email='$email', fathername='$fathername', dob='$dob', course='$course', gender='$gender', mobno='$mobno', section='$section' WHERE rollno='$rollno1'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Student Updated Successfully');</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        
    }
    

        
    ?>

    <h2>Update Student Details</h2>
    <div class="formcontent">
    <div class="formm">

    <form method="post" action="">
        Roll Number: <input type="text" name="rollno"><br>
        First Name: <input type="text" name="firstname"><br>
        Last Name: <input type="text" name="lastname"><br>
        Email: <input type="text" name="email"><br>
        Father's Name: <input type="text" name="fathername"><br>
        Date of Birth: <input type="date" name="dob"><br>
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
        Mobile Number: <input type="text" name="mobno"><br>
        Section: <input type="text" name="section"><br>
        <input style="background-color:RED; " type="submit" name="update" value="Update">
      

    </form>
    
</div>
</div>
</body>
</html>
