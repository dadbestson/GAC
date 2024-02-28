<?PHP 
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database ='test'; 
$conn = new mysqli ("$host","$user","$password","$database"); 
if (!$conn) { 
die ("Connection failed:"); 
} 
$sql = "INSERT INTO info (Roll, Name, Age, Gender) VALUES (5, 'John', 15, 
'Male')"; 
if ($conn->query($sql) === TRUE) { 
echo "New record created successfully"; 
} 
else 
{ 
echo "Error:"; 
} 
$conn->close( ); 
?>