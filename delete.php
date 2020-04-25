<?php  
	$connect = mysqli_connect("localhost", "root", "", "testbaza");
	$sql = "DELETE FROM korisnicibrojeva WHERE ID = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>