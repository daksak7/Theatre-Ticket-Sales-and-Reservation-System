<?php  
	$connect = mysqli_connect("localhost", "root", "", "theatre");
	$sql = "UPDATE reserved_by SET confirm_sale='Purchased' WHERE TICKET_ID='".$_POST["id"]."'"; 
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Ticket sold succesfully.';  
	}  
 ?>