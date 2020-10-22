<?php  
require_once("config.php"); 
$iduser = $_GET['id'];
$query = "DELETE FROM user
WHERE id =  '$iduser'"; 
mysqli_query($db, $query); 


header("Location: daftaruser.php");
die();  
?>