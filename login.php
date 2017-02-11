<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UCSI") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM User_Login ") 
or die(mysql_error());  
if($records)
{
 if($password==$records['password'])
 {
  session_start();
  $_SESSION['username']=$records['username'];
  $_SESSION['userid']=$records['id'];
  header('Location: index.html');
 }
 else
 {
  $msg="Password Incorrect";
  header('Location: login.html?msg='.$msg);
 }
}
else
{
 $msg="Username Incorrect";
 header('Location: login.html?msg='.$msg);
}
?>