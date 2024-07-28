<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Add your CSS stylesheets here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            
            
        }
        .header {
            background-color: white;
            color: black;
            padding: 20px;
            text-align: center;
        }

        img{
            padding-left:60%;
            margin-left:3%;
          
            width:150%;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding:20px;
           
           margin-left: 30%;
            position:center;
        }
        .sidebar {
  height: 100%;
  width: 250px;
  position: fixed;
  top: 0;
  left: 0;
  background: linear-gradient(to right,  #a396c2, hsl(0, 58%, 80%));
    border-radius: 10px;
    box-shadow: rgba(223, 229, 227, 0.2) 0px 7px 29px 0px;

  overflow-x: hidden;
  padding-top: 20px;
  color:black;
  
}

.sidebar a {
  padding: 20px 16px;
  text-decoration: bold;
  font-size: 20px;
  color: white;
  display: block;
}

.sidebar a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown-content {
  background-color: #333;
  padding-left: 16px;
  display: block;
}

.dropdown-content a {
  padding: 10px 16px;
  text-decoration: none;
  color: white;
  display: block;
}

.main-content {
  margin-left: 200px;
  padding: 20px;
}
        
        .section {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 40px;
            margin-left:190px;
            width: 150%;
           
        }
        .section h2 {
            margin-top: 0;
        }
        .aside {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            margin-left:190px;
            width: 150%;
        }
        .aside h2 {
            margin-top: 0;
        }
        .login {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            margin-left:190px;
            width: 150%;
        }
        .login h2 {
            margin-top: 0;
        }
        .date {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            margin-left:190px;
            width: 150%;
        }
        .date h2 {
            margin-top: 0;
        }
        .year {
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
            margin-left:190px;
            width: 150%;
        }
        .year h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1></h1>
        <div class="sidebar">
        <a href="#b">Dashboard</a>
        <a href="#section">SignUp Report</a>
        <a href="#aside">Feedback Report</a>
        <a href="#login"> Login Report </a>
        <a href="add.php">Add and Update Product</a>
        <div class="dropdown">
    <a href="#">Reports</a>
    <div class="dropdown-content">
      <a href="#date">Date Wise </a>
      <a href="#year">Year wise</a>
     
    </div>
        
    </div>
    </div>
    <div class="container">
        <b id="b">
            <div class="b">

<img src="main.jpg">






    </div>
        <section id="section">
        <div class="section">
            <h2></h2>
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3370", "root", "","pickles");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

echo'<h1 style="text-align:center;">SignUp Report</h1>     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
$sqli = "SELECT * FROM `signup`";
if($result = mysqli_query($link, $sqli)){
    if(mysqli_num_rows($result) > 0){
        

        echo'<table class="table">';
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Username</th>";
                echo"<th>Email</th>";
                echo"<th>Password</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['password'] . "</td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

            <!-- Add user management functionality here -->
            <p>.</p>
        </div>


        <aside id="aside">
        <div class="aside">
            <h2></h2>
            <!-- Add post management functionality here -->
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3370", "root", "","pickles");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

echo'<h1 style="text-align:center;">Feedback Report</h1>     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
$sqli = "SELECT * FROM `feedback`";
if($result = mysqli_query($link, $sqli)){
    if(mysqli_num_rows($result) > 0){
        

        echo'<table class="table">';
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>name</th>";
               
                echo"<th>Comments</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
              
                echo "<td>" . $row['comments'] . "</td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

            <p>.</p>
        </div>
</aside>






<login id="login">
        <div class="login">
            <h2></h2>
            <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3370", "root", "","pickles");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

echo'<h1 style="text-align:center;">login Report</h1>     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
$sqli = "SELECT * FROM `login`";
if($result = mysqli_query($link, $sqli)){
    if(mysqli_num_rows($result) > 0){
        

        echo "<table class='table'>";
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>Username</th>";
                
                echo"<th>Password</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
               
                echo "<td>" . $row['password'] . "</td>"; 
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

            <!-- Add settings management functionality here -->
            <p></p>
        </div>
</login>
<date id="date">
    <div class="date">
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3370", "root", "","pickles");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

echo'<h1 style="text-align:center;">Date_wise Report</h1>     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
$sqli = "SELECT * FROM `add_product`";
if($result = mysqli_query($link, $sqli)){
    if(mysqli_num_rows($result) > 0){
        

        echo'<table class="table">';
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>name</th>";
                echo"<th>Price</th>";
                echo"<th>Date</th>";
              
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['date'] . "</td>"; 
               
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?></div>
</date>


<year id="year">
    <div class="year">
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost:3370", "root", "","pickles");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Print host information
//echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

echo'<h1 style="text-align:center;">Year_wise Report</h1>     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
$sqli = "SELECT * FROM `add_product`";
if($result = mysqli_query($link, $sqli)){
    if(mysqli_num_rows($result) > 0){
        

        echo'<table class="table">';
        
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>name</th>";
                echo"<th>Price</th>";
                echo"<th>Date</th>";
                echo"<th>Year</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['date'] . "</td>"; 
                echo "<td>" . $row['year'] . "</td>"; 
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sqli. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</year>
    </div>

</body>
</html>
