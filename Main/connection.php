<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "muses";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
   // echo("Connection success");
}
else{
	echo("Connection failed");
}


?>