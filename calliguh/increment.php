<?php
$value = 1;

 countup()[
     $value++];

$servername = "badredobase.mysql.db";
$username = "badredobase";
$password = "PaBVCLKB3SAK5cY";
$dbname = "badredobase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT counter_value FROM registered_value";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0";
}
$conn->close();
?>