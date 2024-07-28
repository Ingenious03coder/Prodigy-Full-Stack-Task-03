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
