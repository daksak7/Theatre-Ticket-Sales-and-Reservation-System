<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$sql = "DELETE FROM staff WHERE staff_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Theatre deleted';  
	}  
 ?>