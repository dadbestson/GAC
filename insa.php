
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$roll = $_POST['roll'];
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Insert data into the database
$sql = "INSERT INTO info (roll, name, age, gender) VALUES ('$roll', '$name', '$age', '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
