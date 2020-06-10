<?php  
$connect = mysqli_connect("localhost", "root", "", "theatre");
$sql = "INSERT INTO theatre(t_name, location) VALUES('".$_POST["t_name"]."', '".$_POST["location"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Theatre inserted.';  
}  
 ?>