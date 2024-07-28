<?php 

include "connection.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sqli = "DELETE FROM `singup` WHERE `id`='$user_id'";

     $result = $connnection->query($sqli);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sqli . "<br>" . $connection->error;

    }

} 
?>