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
$username = $_POST['username'];
$password = ($_POST['password']);
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: admindashboard.php");
} else {
    $_SESSION['error'] = "Invalid username or password";
    header("Location: invalid_login.php");
}
$conn->close();
?>