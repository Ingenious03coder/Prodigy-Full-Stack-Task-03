<?php 

require "connection.php";

if(isset($_POST["adminlogin"]))
{
    $username = $_POST["username"];
    $password= $_POST["password"];
   

    $insertQuery = "INSERT INTO `adminlogin`(`username`, `password`)VALUES('$username','$password')";
    $result = mysqli_query($connection, $insertQuery);

    if($result)
    {
        echo "<script>alert('Registration Successfull')</script>";
        

    }
    else
    {
        die("Error" . mysqli_error($connection));
    }
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background:transparent;
    background-color:black;
}

.login-container {
    width: 300px;
    margin: 100px auto;
    padding: 50px;
    border: 10px solid #efebeb;
    color:rgb(237, 224, 224);
    margin-top: 20px;
    border-radius: 5px;
    border-collapse: collapse;
      width: 30%;
      tab-size: 2%;
      
    box-shadow: 0 0 30px rgba(223, 221, 221, 0.998);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color:white;
}

input[type="text"],
input[type="password"],
button {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 5px solid #131212;
    background: transparent;
    border-radius: 5px;
    color: white;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
   
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
h1{
  color: white;  
text-align: center;
padding-bottom: 50px;
}

    </style>
</head>
<body>
    <h1>Welcome Back Admin</h1>
    <div class="login-container">
        
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit"name="AdminLogin"><a href="A.php">Login</a></button>
        </form>
    </div>
    
</body>
</html>
