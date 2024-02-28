<?PHP 
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'test'; 
$conn = new mysqli ("$host","$user","$password","$database"); 
if (!$conn) { 
die ("Connection failed:"); 
} 
// sql to delete a record 
$sql = "DELETE FROM info WHERE Roll = 0"; 
if ($conn->query($sql) === TRUE) 
{ 
 echo "Record deleted successfully"; 
} 
 else 
{ 
 echo "Error deleting record: "; 
} 
$conn->close(); 
?>