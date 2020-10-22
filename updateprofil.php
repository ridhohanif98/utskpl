<?php
    include 'config.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $alamat=$_POST['alamat'];
    $notelp=$_POST['notelp'];


    mysqli_query($db,"UPDATE user SET email='$email', password='$password', nama='$nama', username='$username', alamat='$alamat', notelp='$notelp' where username='$username'");
    header('Location: profil.php');
?>