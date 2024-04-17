<?php 
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
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','student');
if ($conn->connect_error){
    die('Connection Failed:' .$conn->connect_error);
}
else{
    $sql = $conn->prepare("insert into student_login(firstname,lastname,email,fathername,course,gender,dob,mobno,rollno,section,username,password)values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("ssssssssisss", $firstname,$lastname,$email,$fathername,$course,$gender,$dob,$mobno,$rollno,$section,$username,$password);
    $sql->execute();
    echo "Registraion Successful...";
    $sql->close();
    $conn->close();
}
?>