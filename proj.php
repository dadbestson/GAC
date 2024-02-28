
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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$province = $_POST['province'];
$contact = $_POST['contact'];
$email = $_POST['email'];

// Insert data into the database
$sql = "INSERT INTO form (fname,lname,dob,address,province,contact,email) VALUES ('$fname', '$lname', '$dob', '$address', '$province', '$contact', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
