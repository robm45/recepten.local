<?php

$servername = "localhost";
$username = "rob"; 
$password = "G@4itn@ow100"; 
$database = "recepten_db"; 
$conn = new mysqli($servername, $username, $password, $database); 


//Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
#echo "Connected successfully";
?>
