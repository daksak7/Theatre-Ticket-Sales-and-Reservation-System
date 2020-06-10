<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$sql = "DELETE FROM theatre WHERE tid = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Theatre deleted';  
	}  
 ?>