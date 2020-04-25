<?php  
	$connect = mysqli_connect("localhost", "root", "", "testbaza");
	$id = $_POST['ID'];  
	$text = $_POST['text'];  
	$column_name = $_POST['column_name'];
	$sql = "UPDATE korisnicibrojeva SET ".$column_name."='".$text."' WHERE ID='".$id."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo "Data with ID: "; echo $id; echo" was updated!";   
	}  
 ?>