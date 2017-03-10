<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="table.css"/> 
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
</head>

<body>
<div class="table-title">
<h3>Data Table</h3>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-left">Sensor Values</th>
<th class="text-left">Date /Time</th>
</tr>
</thead>
<tbody class="table-hover">



  <?php
$servername = "localhost:3306";
$username = "root";
$password = "root";
$dbname = "sensortest";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM sensor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		


echo "<tr>";
echo "<td>" . $row['sensorvalue'] . "</td>";	
echo "<td>" . $row['date_time'] . "</td>";	
        //echo "id: " . $row["id"]. " --- Sensor value: " . $row["sensorvalue"]. " --- Log: " . $row["date_time"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


</tbody>
</table>


  </body>
  