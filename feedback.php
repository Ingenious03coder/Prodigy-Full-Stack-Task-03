<?php 

require "connection.php";

if(isset($_POST["feedback"]))
{
    $name = $_POST["name"];
    $email=$_POST["email"];
   
    $comments= $_POST["comments"];

    $insertQuery = "INSERT INTO `feedback`(`name`, `email`, `comments`) VALUES ('$name','$email','$comments')";
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
    <title>Feedback Form</title>
    <style>
/* styles.css */
body {
    font-family: Arial, sans-serif;
    background: url('p10.jpg');
    background-repeat: no-repeat;
    background-size:cover;
    color:rgb(13, 13, 13);
    padding:7%;
    

}

.container {
    max-width: 400px;
    margin-left: 30%;
    padding:20px;
    border: 10px solid #efebeb;
    border-radius: 7px;
    box-shadow: 0 0 10px rgba(235, 233, 233, 0.987);
    background: transparent;
}

h2 {
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;

}

label {
    margin-top: 10px;
}

input, select, textarea {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="feedback.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

           

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments" rows="4" required></textarea>

            <button type="submit"name="feedback">submit</button>
        </form>
    </div>
</body>
</html>
