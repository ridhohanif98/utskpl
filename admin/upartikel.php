<?php
  

session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
include 'config.php';
    $msg = "";
    // Get image name
    $gambar = $_FILES['gambar']['name'];
    // Get text
    $isi = mysqli_real_escape_string($db, $_POST['isi']);
    $judul = mysqli_real_escape_string($db, $_POST['judul']);
    $tanggal = date('Y-m-d');

    // image file directory
    $target = "image/".basename($gambar);

    $sql = "INSERT INTO artikel (judul, gambar, isi, tanggal, username) VALUES ('$judul', '$gambar', '$isi', '$tanggal', '$username')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
    header('Location: daftarartikel.php');
?>