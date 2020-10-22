<?php
    include 'config.php';
    $id=$_GET['id'];
	$sql = "DELETE FROM artikel WHERE id_artikel=$id";  
	if(mysqli_query($db, $sql))  
	{  
		echo 'Data Deleted';  
    }
    header('Location: daftarartikel.php'); 
 ?>