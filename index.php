<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Part 12 : Membuat Navigation bar Bootstrap</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top">
				<div class="container">
						
						<a class="navbar-brand" href="#"><img src="image/4.png" width="40" height="40" class="d-inline-block align-top" alt="">Reds Studio</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
						</button>
					  
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
						  <ul class="navbar-nav ml-auto">
							<li class="nav-item active">
							  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="tentangkami.php">Tentang Kami</a>
							</li>
							<li class="nav-item">
							<a class="nav-link" href="#">Hubungi Kami </a>
							</li>
							<li class="nav-item">
								<input class="btn btn-outline-primary" type="button" value="Log in" onclick="window.location.href='/pkl/login.php'" />
							</li>
							
						  </ul>
						
						</div>
				</div>
			  </nav>



			  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					  <div class="carousel-item active">
						<img src="image/1.jpg" class="d-block w-100" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
								<h5>Katakan Hai!</h5>
								<p>Kami jelas harus tau dimana lokasi bisnis anda, target pasar, ide bisnis, dan semua yang berhubungan dengan hal tersebut. Kami harus berbicara lebih lanjut dengan orang yang paham akan hal tersebut, sehingga kami bisa paham bisnis anda dan menggunakan wawasan yang sudah ada untuk dituangkan dalam sebuah strategi.</p>
								<input class="btn btn-outline-success" type="button" value="Bergabung" onclick="window.location.href='/pkl/register.php'" />
							  </div>
							  
					  </div>
					  <div class="carousel-item">
						<img src="image/2.jpg" class="d-block w-100" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
								<h5>Strategi</h5>
								<p>Sebagai sebuah tim, kami ingin Anda untuk memahami apa yang kita rencanakan dan mengapa hal tersebut sangat tepat untuk bisnis Anda. Sehingga Anda ikut bersemangat tentang rencana dan strategi itu seperti halnya kami.</p>
								<input class="btn btn-outline-success" type="button" value="Bergabung" onclick="window.location.href='/pkl/register.php'" />
							  </div>
					  </div>
					  <div class="carousel-item">
						<img src="image/3.jpg" class="d-block w-100" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
								<h5>Aksi</h5>
								<p>Di sinilah Anda akan melihat dan merasakan strategi kami datang secara nyata dan kreativitas berubah menjadi hasil.

									Ini bukan hanya tentang kemenangan yang cepat, melainkan membangun pondasi yang kuat untuk bisnis jangka panjang yang menjadi prioritas kami.</p>
									<input class="btn btn-outline-success" type="button" value="Bergabung" onclick="window.location.href='/pkl/register.php'" />
							  </div>
					  </div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					  <span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					  <span class="carousel-control-next-icon" aria-hidden="true"></span>
					  <span class="sr-only">Next</span>
					</a>
				  </div>
			

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>