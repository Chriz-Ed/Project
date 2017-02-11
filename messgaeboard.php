<html>
<head>
	<title>Messages</title>
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "FYP";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM MESSAGES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "USER_ID: " . $row["USER_ID"]. " MESSAGES: " . $row["MESSAGES"].  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 