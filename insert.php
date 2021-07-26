
    
<?php



$u_id = $_GET["u_id"];
$u_name = $_GET["u_name"];
$u_pass=$_GET["u_pass"];
$u_email=$_GET["u_email"];



$servername = "localhost";
$u_name = "root";
$u_pass = "root";
$dbname = "system";


// Create connection
$conn = mysqli_connect($servername, $u_name, $u_pass, $dbname);


// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}


echo "Connected successfully<BR>";



$sql = "INSERT INTO users ( u_id, u_name, u_email, u_pass) VALUES ( '$u_id', '$u_name', '$u_email', '$u_pass')";
echo $sql;



if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);


//redirect page 
//header("Location: db.php");


?>












