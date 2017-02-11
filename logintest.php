<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "UEPP";
$prefix = "";

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn =new mysqli("localhost", "root","", "UEPP"); // Starting Session
if (! $conn )
{
    die("Connection failed: " . $conn->connect_error);
}   


// Define $username and $password
$USER_ID =isset($_POST['USER_ID']);
$Password=isset($_POST['Password']);

// SQL query to fetch information of registerd users and finds user match.
$sql = "SELECT USER_ID, password FROM user_login";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
header('Location: Home.html');
} else {
    echo "0 results";
header('Location: login.html');
}
$conn->close();
?>