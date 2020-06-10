<?php  
$connect = mysqli_connect("localhost", "root", "", "theatre");
$sql = "INSERT INTO shows(s_name, s_date,language,st_time,TID,price) VALUES('".$_POST["s_name"]."', '".$_POST["s_date"]."','".$_POST["language"]."','".$_POST["st_time"]."','".$_POST["TID"]."','".$_POST["price"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Show inserted.';  
}  
 ?>