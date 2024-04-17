<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
        
.container {
    max-width: 400px;
    margin: 0 auto;
    text-align: center;
}

input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

#message {
    margin-top: 20px;
    color: red;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <p>Enter your email address below to reset your password.</p>
        <form id="forgotPasswordForm">
            <input type="email" id="email" placeholder="Enter your email" required>
            <button type="submit" onclick="forgot_password()">Reset Password</button>
        </form>
        <div id="message"></div>
    </div>
    <script>
        function forgot_password() {
              alert("Forgot Password Link Send on Your Email-ID")
       }
    </script>
</body>
</html>
