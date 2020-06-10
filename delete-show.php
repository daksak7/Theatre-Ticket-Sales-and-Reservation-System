<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$sql = "DELETE FROM shows WHERE show_id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Show deleted';  
	}  
 ?>