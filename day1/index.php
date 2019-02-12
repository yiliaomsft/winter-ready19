<?php
echo "<p align=left> <font color=blue size=40pt> Hello Microsoft Ready!  </font> </p>";  
echo "<p align=left> <font size=28pt> Day #1 Use Case </font> </p>";
echo "\r\n \r\n \r\n";

echo "<p align=left> <font color=black size=24pt> Seattle 7-Day Weather Forecast </font> </p>";
// Dump a MySQL database table to the page
// MySQL database configration
$servername = getenv('DATABASE_HOST');
$username = getenv('DATABASE_USERNAME');
$password = getenv('DATABASE_PASSWORD');
$dbname = getenv('DATABASE_NAME');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM weather";
$result = $conn->query($sql);
echo "<table>"; // start a table tag in the HTML

while($row = $result->fetch_assoc()) {   //Creates a loop to loop through results
echo "<tr><td>"  . $row['day_of_week'] . "</td><td>" . $row['forecast'] . "</td></tr>";  }

echo "</table>"; //Close the table in HTML

$conn->close();
?> 
