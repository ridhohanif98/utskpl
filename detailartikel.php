<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
    <a class="navbar-brand" href="#">
    <img src="image/4.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Reds Studio
  </a>
      <div class="list-group list-group-flush">
        <a href="lihatartikel.php" class="list-group-item list-group-item-action bg-light">Artikel</a>
        <a href="profil.php" class="list-group-item list-group-item-action bg-light">Profil</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-default" id="menu-toggle"><span class="navbar-toggler-icon"></span></button>

        <button class="navbar-toggler btn red" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <form class="form-inline my-2 my-lg-0">
        <a class="nav-link" href="#"> Account : <b><?php echo $username;?></b></a>
      <button type="button" class="btn btn-outline-danger ml-2" onclick="window.location.href='logout.php'">Log Out</button>
          </ul>
        </div>
      </nav>

      <div class="container isi des">
    <div class="row artikel">
        <div class="col">
        <?php
            include 'config.php';
            $id=$_GET['id'];
            $data = mysqli_query($db,"SELECT * FROM artikel where id_artikel=$id");
            $row2 = $data->fetch_array();                
        ?>
            <div class="row text-center">
                <div class="col">
                    <h1 class="list-group-item-heading text-center jdl"><?php echo $row2['judul'];?></h1>
                    <h5> dibuat : <?php echo $row2['tanggal'];?> </h5>
                    <hr>
                </div>
            </div>
            <div class="row text-center">
                <div class="col">
                    <img src="admin/image/<?php echo $row2['gambar'];?>" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php echo $row2['isi'];?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
