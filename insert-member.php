<?php  
$connect = mysqli_connect("localhost", "root", "", "theatre");
$sql = "INSERT INTO member(c_name, phone,email,customer_username,customer_password) VALUES('".$_POST["c_name"]."', '".$_POST["phone"]."','".$_POST["email"]."','".$_POST["customer_username"]."','".$_POST["customer_password"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Member inserted.';  
}  
 ?>