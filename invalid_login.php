<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <style>
    body {
    font-family:cursive;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
    background-image: url(university.webp);
    background-repeat: no-repeat;
    background-size: cover;
  
    
  }
  
  .login-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    height:auto;
    width: 350px;
  }
  
  .login-container h2 {
    margin-bottom: 20px;
    font-size: 35px;
  }
  
  .login-container input {
    width: 325px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .login-container .btn {
    width: 100%;
    margin-top: 10px;
    margin-bottom: 20px;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .login-container .forgot-password {
    font-size: 15px;
    position: absolute;
    right: 500px;
  }
  
  .login-container .back-home {
    margin-top: 40px;
    background-color: #a6ff00;
    padding: 10px;
    color: white;
    border-radius: 6px;
    margin-bottom: 25px;
  }

  .login-container .back-home:hover{
    background-color: #fbf729e9;
    cursor: pointer;
  }
  
  .login-container .btn:hover {
    background-color: #0056b3;
  }

  .adminlogin{
    padding: 10px;
    color: black;
    border-radius: 6px;
  }
  </style>
</head>

<body>
  <div class="login-container">
    <h2>Admin Login</h2>
    <h6 style="color:red">Invalid Username Or Password!</h6>
    <p>Sign in to continue.</p>
    <form action="login.php" method="POST">
      <input type="text" placeholder="Username" name="username" required>
      <input type="password" placeholder="Password" name="password" required>
      <button type="submit" class="btn">Login</button>
    </form>
    <a href="forgot.php" class="forgot-password">Forgot Password?</a>
    <div class="back-home">
      <a href="homepage.php">Back to Home</a>
    </div>
    <a href="stuedntlogin.php" class="adminlogin">For Student</a>
  </div>
</body>
</html>

