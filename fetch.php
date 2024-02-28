<?PHP 
$host = 'localhost'; 
$user = 'root'; 
$password = ''; 
$database = 'test'; 
$conn = new mysqli ("$host","$user","$password","$database"); 
if (!$conn) { 
die ("Connection failed:"); 
} 
$sql = "SELECT Roll, Name, Age, Gender FROM info"; 
$result = $conn->query($sql); 
if ($result->num_rows > 0) 
{ 
echo "<table width = 30% border = 1 cellspacing=0 cellpadding=0 >"; 
echo "<tr>"; 
echo "<td>"."Roll"."</td>"; 
echo "<td>"."Name"."</td>"; 
echo "<td>"."Age"."</td>"; 
echo "<td>"."Gender"."</td>"; 
echo "</tr>"; 


// output data of each row 
while ($row = $result->fetch_assoc ( )) 
{ 
echo "<tr >"; 
echo "<td>".$row ["Roll"]."</td>"; 
echo "<td>".$row ["Name"]."</td>"; 
echo "<td>".$row ["Age"]."</td>"; 
echo "<td>".$row ["Gender"]."</td>"; 
echo "</tr>"; 
} 
} 
else 
{ 
echo "0 results"; 
} 
$conn->close ( ); 
?>