<?php
//Step 2: Connect to Database
$servername = "localhost:3370";
$username = "root";
$password = "";
$dbname = "pickles";

$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Step 3: Query Data
// Monthly Sales
$sqli = "SELECT * FROM `add_product`";
$monthlySalesQuery = "SELECT YEAR(date) as year, MONTH(date) as month, SUM(quantity * price) as total_sales FROM sales_table GROUP BY YEAR(date), MONTH(date)";
$monthlySalesResult = $connection->query($monthlySalesQuery);

// Yearly Sales
$yearlySalesQuery = "SELECT YEAR(date) as year, SUM(quantity * price) as total_sales FROM sales_table GROUP BY YEAR(date)";
$yearlySalesResult = $connection->query($yearlySalesQuery);

// Step 4: Process Data & Format Report
echo "<h2>Monthly Sales Report</h2>";
echo "<table border='1'>";
echo "<tr><th>Year</th><th>Month</th><th>Total Sales</th></tr>";
while($row = $monthlySalesResult->fetch_assoc()) {
    echo "<tr><td>".$row["year"]."</td><td>".$row["month"]."</td><td>".$row["total_sales"]."</td></tr>";
}
echo "</table>";

echo "<h2>Yearly Sales Report</h2>";
echo "<table border='1'>";
echo "<tr><th>Year</th><th>Total Sales</th></tr>";
while($row = $yearlySalesResult->fetch_assoc()) {
    echo "<tr><td>".$row["year"]."</td><td>".$row["total_sales"]."</td></tr>";
}
echo "</table>";

// Step 5: Close Connection
$connection->close();
?>
