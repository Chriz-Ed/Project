<?php
$host="127.0.1.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="UCSI";

$sql = "INSERT INTO Messages (userID, messages)
VALUES ('100' 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>