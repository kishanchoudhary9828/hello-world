<?php
$servername = "localhost";

$username = "kishan";

$password = "kishan@123";
// die($password);
$database="myproject";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database );
// Check connection
if ($conn) {
  echo "connection successfully";
}
else{
echo "Connected failed";
}

?>