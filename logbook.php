<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname="UCSI";



$conn = new mysqli($host, $user, $password, $dbname);
if (!$conn) {
	die("Could not connect: " . $conn->connect_error);
}


$student_id = isset($_POST['student_id']);
$student_name = isset($_POST['student_name']);
$date = isset($_POST['date']);
$faculty = isset($_POST['faculty']);
$comment = isset($_POST['comment']);

$sql = "INSERT INTO Logbook (Student_id, Student_name, Date, Faculty, Comment)
        VALUES ('$student_id', '$student_name', '$date', '$faculty', '$comment')";

if ($conn -> query($sql) === TRUE) {
	echo "New records created successfully";
} else {
	echo "Error: " . $sql . $conn -> error;
}

//$conn -> close();
?>

