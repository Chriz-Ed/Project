<!DOCTYPE HTML>
<head>
<title>View existing paper</title>
<style>

#header {
    background-color: red;
    color:white;
    text-align:center;
    padding:2px;
}

#nav {
	font-family: Helvetica ;
	background-color: black;
    color: #FFFFFF ;
    text-align: center;
    border-style: solid;
    border-bottom-color: black;
    padding:5px;
    position: relative;

}
 
 a{
    color: white;
  }
  
    
 button{
        font-family: Helvetica;
        font-size: 16px;
        width:300px;
        height:30px;
        border-color: black;
        border-style:solid;
        border-bottom-color: black;
        background: white;
        margin-left: 700px;
    }
 
background-color: #F8F8F8 ;
    }
    
      li {
    display: inline;
    padding: 0px 10px 0px 10px;
  }
  
    
    h1{
                
      font-family: Helvetica;
      text-align: center;
      font-size: 36px;   
        }
        
        
    h2 {
  	font-family: Helvetica ;
    font-size: 20px;
    text-align: center;
  }
  
     h3 {
  	font-family: Helvetica ;
    font-size: 26px;
    text-align: center;
  }
  li {
    display: inline;
    padding: 0px 10px 0px 10px;
  }


        
   table {
   margin: 8px;
   margin-left: 30%;
   
}

th {
font-family:  Helvetica, ;
font-size: 20px;
background: white;
color: black;
padding: 2px 6px;
border: 1px solid #000;

}

td {
font-family: Helvetica;
font-size: 17px;
border: 1px solid #DDD;
}
</style>
</head>

<div id="header">
		<h1>UCSI UNIVERSITY</h1>

</div>

<div id="nav" >
	<h2> 
	  <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="https://iis.ucsiuniversity.edu.my/Student/Default.aspx?PossePresentation=Library&PosseObjectId=1754620">Resources</a></li>
      <li><a href="#">Messsages</a></li>
    </ul>
    </h2>
 
 </div>
    <body>
        <h3>Inbox</h3>
<?php
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("UCSI") or die(mysql_error());

// Get all the data from the "example" table
$result = mysql_query("SELECT * FROM Apointment ORDER BY Date") 
or die(mysql_error());  

echo "<table border='1'>";
echo "<tr> <th>Name</th> <th>Date</th> <th>Time</th><</tr>";
// keeps getting the next row until there are no more to get
while($row = mysql_fetch_array( $result )) {
    // Print out the contents of each row into a table

        echo '<tr>';
	    echo '<td colspan="10">'.$row["student_Name"].'</td>'; 
	    echo '<td colspan="10">'.$row["Date"].'</td>';      
		echo '<td colspan="">'.$row["Time"].'</td>';      
	    echo '</tr>';
 
		
        
}
echo "</table>";
?>


    </body>
</html>