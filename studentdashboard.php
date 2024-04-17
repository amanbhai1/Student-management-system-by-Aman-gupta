<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student</title>
    <style>body {
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
    background-color: #FF9398;
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
  
  .sidebar a:hover {
    color: white;

    background-color: black;
  }
  
  .sidebar .header {
    background-color: #FF9398;
    margin-bottom: 30px;
  }
  .sidebar .header img{
    height: 40px;
    width: 40px;
    border-radius: 50%;
  }
  
  .sidebar h2:hover {
    background-color: black; 
    color: white;
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
  
  
  </style>
</head>
<body>
    <div class="sidebar">
        <div class="header">
          <h2><img src="face8.png"> <u>Admin</u></h2>
          <hr>
        </div>
        <div class="links">
        <a href="studentdashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a><hr>
        <a href="Profile.php"><i class="fa fa-group"></i>Profile</a><hr>
        <a href="homepage.php"><i class="fas fa-sign-out-alt"></i> Log out</a><hr>
        </div>
      </div>
    
      <div class="content">
        <div class="top_header">
            <h3>Welcome To Dashboard</h3>
        </div>
</body>
</html>