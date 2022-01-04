<!DOCTYPE html>
<html>
<head>
	<title>Pass Etudiant</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="pass etudiant passetudiant" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
include_once "includes/header.php"; 
include_once "includes/navbar.php";
?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  	
    <div class="carousel-item active">
      <img class="carousel-image" src="images/image1.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img class="carousel-image"  src="images/image2.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img class="carousel-image" src="images/image1.jpg" alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<div class="container-fluid menu-bar">
	<ul class="snip1189">
  		<li class="menu-bar-icons"><a href="#"><img src="images/loisirs.jpg"></a></li>
  		<li class="menu-bar-icons"> <a href="#"><img src="images/restaurant.jpg"></a></li>
  		<li class="menu-bar-icons"> <a href="#"><img src="images/materiel.jpg"></a></li>
  		<li class="menu-bar-icons"> <a href="#"><img src="images/transport.jpg"></a></li>
  		<li class="menu-bar-icons"> <a href="#"><img src="images/shopping.jpg"></a></li>
  	</ul>
</div>


<div class="container body-content">
	<div class="container-fluid cards-container1">
		<div class="cards-container-title">
			<h2>Les offres du jour</h2>
			<br>
		</div>
		<div class="row justify-content-center">
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		</div>
	</div>

	<div class="container-fluid cards-container">
		<div class="cards-container-title">
			<h2>Les Actualités</h2>
			<br>
		</div>

		<div class="row justify-content-center">
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		</div>


	</div>

	<div class="container-fluid cards-container">
		<div class="cards-container-title">
			<h2>LES EVENEMENTS</h2>
			<br>
		</div>

		<div class="row justify-content-center">
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		<div class="cards-container-cards col-md-3">
			<div class="card" style="width:248px">
  				<img class="card-img-top" src="https://via.placeholder.com/248" alt="Card image">
  				<div class="card-body">
    				<h4 class="card-title">John Doe</h4>
    				<p class="card-text">Some example text.</p>
  				</div>
			</div>
		</div>
		</div>
	</div>
</div>
<div class="about-app-container">
	<div class="about-app-title">
		<h1>prenez pass-etudiant avec vous<br/>partout où vous allez!</h1>
	</div>
	<div class="about-app-description">
		<p>telechargez notre application pass-etudiant<br/> disponible pour Iphone et android</p>
	</div>
	<div class="about-app-buttons">
		<img class="about-app-btn" src="images/appstore.png">
		<img class="about-app-btn" src="images/googleplay.png">
	</div>
	
</div>
<div class="qlqchiffres">
	<h2>PASS-ETUDIANT.TN EN QUELQUES CHIFFRES</h2>
	<div class="container chiffres-content">
		<div class="row">
			<div class="col-md-4">
				<div class="cercle"><i class="fas fa-graduation-cap"></i></div>
				
			<div class="azert col-md-4">
				<br>
				<div class="numbers"><h4>55235</h4></div>
				<br>
				<div class="numbers-info" style="color: white; text-align: center; margin-top: -30px;" align="center"><p>etudiants inscrits</p></div>
			</div>
			</div>
			<div class="col-md-4">
				<div class="cercle"><i class="fas fa-utensils"></i></div>
				<br>
			<div class="azert col-md-4">
				<div class="numbers"><h4>55235</h4></div>
				<br>
				<div class="numbers-info" style="color: white; text-align: center; margin-top: -30px;" align="center">Repas servis/jour</div>
			</div>
			</div>
			<div class="col-md-4">
				<div class="cercle"><i class="far fa-star"></i></div>
				<br>
			<div class="azert col-md-4">
				<div class="numbers"><h4>55235</h4></div>
				<br>
				<div class="numbers-info" style="color: white; text-align: center; margin-top: -30px;" align="center">Avis Etudiants</div>
			</div>
			</div>

		</div>
	</div>
</div>

<div class="container partner">
	<div class="partner-title">
		<h1>NOS PARTENAIRES</h1>
	</div>
	<div class="row">
		<div class="col-md-2">
			<img class="partner-img" src="images/partner1.jpg">
		</div>
		<div class="col-md-2">
			<img class="partner-img" src="images/partner2.jpg">
		</div>
		<div class="col-md-2">
			<img class="partner-img" src="images/partner3.jpg">
		</div>
		<div class="col-md-2">
			<img class="partner-img" src="images/partner4.jpg">
		</div>
		<div class="col-md-2">
			<img class="partner-img" src="images/partner5.jpg">
		</div>
		<div class="col-md-2">
			<img class="partner-img" src="images/partner6.jpg">
		</div>
	</div>
</div>

<?php
include_once "includes/footer.php";

?>
</body>
</html>
