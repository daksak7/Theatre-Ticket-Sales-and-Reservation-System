<?php  
$connect = mysqli_connect("localhost", "root", "", "theatre");
$sql = "INSERT INTO staff(staff_name, phone,address,staff_type,staff_username,staff_pw) VALUES('".$_POST["staff_name"]."', '".$_POST["phone"]."','".$_POST["address"]."','".$_POST["staff_type"]."','".$_POST["staff_username"]."','".$_POST["staff_pw"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Theatre inserted.';  
}  
 ?>