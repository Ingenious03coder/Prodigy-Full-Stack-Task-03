<?php 

require "connection.php";

if(isset($_POST["login"]))
{
    $username = $_POST["username"];
    $password= $_POST["password"];
   

    $insertQuery = "INSERT INTO `login`( `username`, `password`) VALUES('$username','$password')";
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
<html>
<head>
    <title>Login Page</title>
    <style>

        .container {
    margin: 30px;
    padding: 30px;
    
    width: 300px;
    height:300px ;
    text-align: left;
    background-color: #f9f9f9;
    border: 10px solid #efebeb;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(235, 233, 233, 0.987);
    
}

h1 {
    font-size: 24px;
}

form {
    text-align: right;
    
}
h2{
    text-align: center;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    position: left;
    
    
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid #ccc;
    border-radius: 5px;
    margin-right: 20%;
}

input[type="submit"] {
    background-color: #333;
    text-align: center;
    color: #fff;
    padding: 50px 100px;
    border: 2px;
    border-radius: 3px;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    cursor: pointer;
    position: center;
    
}

input[type="submit"]:hover {
    
    background-color: blue;
    color:white ;
    cursor: pointer;
}
div{
    
    background: transparent;
    

}
form{
      color: #ebe5e5;
      padding: 50px; 
    
    margin-right: 70%;
        
}


.container{
    background: transparent;
    
}

.label{

    padding: 20px;
    
}
h1{
    color: #09035f;
    margin-left: 10%;

}


p{
    font-family: 'sans-serif';
    
    font-display: block;

}
    
    table {
      border-collapse: collapse;
      width: 100%;
      tab-size: 2%;
      
    }

   
  body{
    background:url('p6.jpg') ;
    background-repeat: no-repeat; 
    background-size: cover;
  }
  


    </style>
</head>
<body>
    
       
   
<center>

    
<form action="login.php" method="POST">
        <div class="container">
            <h2>Login</h2>
            
            <form>
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Username" required>
        
                <label for="password">Password:</label>
                            <input type="password" name="password" placeholder="Password" required>
        
                
                <button type="submit" name="login">Login</button>
            </form>
        
        
        </div>
    </center> 
               
</body>
</html>
