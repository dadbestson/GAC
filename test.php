<?php
$servername = "localhost";
$username = "root";
$password = "";
// Connection
$conn = new mysqli($servername,$username, $password);
// For checking if connection is successful or not
if (!$conn) {
echo("Connection failed: ");
}
echo "Connected successfully";
?>
