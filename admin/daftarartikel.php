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
        <a href="daftaruser.php" class="list-group-item list-group-item-action bg-light">Daftar User</a>
        <a href="tambahadmin.php" class="list-group-item list-group-item-action bg-light">Tambah Admin</a>
        <a href="tambahartikel.php" class="list-group-item list-group-item-action bg-light">Tambah Artikel</a>
        <a href="daftarartikel.php" class="list-group-item list-group-item-action bg-light">Daftar Artikel</a>
        <!-- / <a href="editcarousel.php" class="list-group-item list-group-item-action bg-light">Edit Carousel</a> -->
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

      <div id="b" class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Artikel<i style="margin-left:5px" class="fa fa-align-left"></i></h2>
                   </div>
                   <div class="col-md-6">
                        <div class="c" style="float:right"> <a href="addartikel.php"><i class="fa fa-2x fa-plus-circle"></i></a>      <a href="artikel/deleteallartikel.php" onclick="return confirm('Are you sure you want to delete all article?');"><i class="fa fa-2x fa-times-circle delete_all"></i></a></div>
                   </div>
                </div>
            </div>
        </div>
        <div class="borderr shadow">
            <div class="container-fluid artikel" id="page">
            <?php
                include 'config.php';
                $data = mysqli_query($db,"SELECT * FROM artikel order by id_artikel desc");
                    while($row = $data->fetch_array()) :                    
            ?>
                <div class="list-group">
                <a href="desartikel.php?id=<?php echo $row["id_artikel"];?>">
                <div class="row">
                    <div class="col-lg-2">
                        <img src="image/<?php echo $row["gambar"];?>" class="img-thumbnail">
                    </div>
                    <div class="col-lg-10">
                        <div class="row judulartikel">
                        <h3><?php echo $row['judul']; ?></h3>
                        </div>
                        <div style="height:50px; overflow:hidden;" class="row">
                        <?php echo $row['isi']; ?>
                        </div>
                    </div>
                </div>
                <hr>
                </a>
                </div>
            <?php endwhile;?>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <nav class="" aria-label="...">
                        <ul class="pagination justify-content-end">
                            <li class="page-item page-link" id="previous-page"><a href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span></a></li>
                        </ul>
                    </nav>
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
