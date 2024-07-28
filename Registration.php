<?php 

require "connection.php";

if(isset($_POST["singup"]))
{
    $username = $_POST["username"];
    $email=$_POST["email"];
    $password= $_POST["password"];

    $insertQuery = "INSERT INTO `signup`( `username`, `email`, `password`)  VALUES('$username','$email','$password')";
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
  <title>User Registration Form</title>
 <style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f8ebeb;
  margin: 0;
  padding: 0;
  background-image: url('p3.jpg');
  background-repeat: no-repeat;
    background-size:cover;

}
.form{
    color: #ebe5e5;
      padding: 50px; 
    margin: top 20%; ;
    
    
}

.container {
  color:white;
  font-weight: bold;
    
   float: right;
   margin-left: 50%;
   margin-right: 5%;
    padding:50px;
    border: 10px solid #efebeb;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(235, 233, 233, 0.987);
    background: transparent;
    box-sizing: 20px;
    width: 30%;
    margin-top: 3%;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  margin-bottom: 5px;
}

.input-group input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}


.input-group button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
}

.input-group button:hover {
  background-color: #0056b3;
}
h3 a{
  width: 20%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  background-color: #0056b3;
}
 </style>
</head>
<body>
  <div class="container">
  <form action="Registration.php" method="POST">
      <h2>Sign In</h2>
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="input-group">
        <button type="submit"name="singup">Sign In</button>
        <h3><br> <a href="login.php">Login</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
