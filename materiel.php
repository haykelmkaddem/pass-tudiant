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

  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
  	
    <div class="carousel-item active">
      <img class="carousel-image1" src="images/bannermateriel.png" alt="Los Angeles">
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



<br><br><hr>
<div class="container body-content">
	<div class="container-fluid cards-container">
		<div class="cards-container-title">
			<h2>Restaurants universitaires</h2>
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
<br><br><hr>
	<div class="container-fluid cards-container">
		<div class="cards-container-title">
			<h2>Restaurants conventionnés avec Pass Etudiant</h2>
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
<br><br><hr>

	<div class="container-fluid cards-container">
		<div class="cards-container-title">
			<h2>Les Réductions du jour</h2>
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


<br/>
<br/>
<br/>
<br/>
<br/>

<?php
include_once "includes/footer.php";

?>
</body>
</html>
