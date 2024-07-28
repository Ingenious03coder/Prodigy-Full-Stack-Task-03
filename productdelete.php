<?php 

include "connection.php"; 

if (isset($_GET['add_product'])) {

    $id = $_GET['delete'];

    $sqli = "DELETE FROM `add_product` WHERE `id`='$id'";

     $result = $connnection->query($sqli);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sqli . "<br>" . $connection->error;

    }

} 
?>