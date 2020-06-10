<?php 
if (!session_id()) {
	session_start();
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "theatre";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$tid=$_POST['tid'];
$_SESSION['tid']=$tid;
$salonadı=$_POST['salonadı'];
$koltuk=$_POST['koltuk'];
$id=$_SESSION['id'];
date_default_timezone_set('Europe/Istanbul'); 
$anlıksaat = date('Y-m-d H:i:s');
$_SESSION['anlıksaat']=$anlıksaat;

 //TICKET_ID
echo $tid;
$sql2 = "INSERT INTO reserved_by (customer_username, res_date,confirm_sale)
VALUES ('$id','$anlıksaat', 'Reserved')";

if ($conn->query($sql2) === TRUE) {
  //echo "Reserved_by başarıyla eklendi.";


 header('Location: backgroundoperation.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>