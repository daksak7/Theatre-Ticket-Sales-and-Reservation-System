<?php include 'header-yetkili.php';?>
<link rel="stylesheet" href="css/styles.css">

<?php
session_start();
// If the user is not logged in redirect to the login page...
//if (!isset($_SESSION['loggedin'])) {
//	header('Location: index.php');
//	exit;
//}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'theatre';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT staff_pw, staff_username FROM staff WHERE staff_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
 <body>
 <?php 
 echo 'Welcome&nbsp; ';echo $_SESSION['id'];
 ?>	



 </body>



<?php include 'footer.php'?>