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
<div class="barre-bleu">
<h1 style="font-size: 24px; text-decoration: none;"><a style="font-size: 24px; text-decoration: none; color: white;" href="index.php"><i class="fas fa-home"></i></a> / Où payer</h1>	
</div>

<div class="container ou-payer-content">
	<div class="ou-payer-title">
		<h3>QUELS SONT LES LIEUX QUI ACCEPTENT LE PAIEMENT<br> PAR PASS-ETUDIANT ?</h3>
	</div>
	<div class="row">

	<div class="ou-payer-left col-md-6">
		<p>Pass-Etudiant est accessible dans les lieux de restauration de votre OOUN.</p>
		<p>Pass-Etudiant permet aussi de payer :</p>
		<ul>
			<li><p>D’autres services et prestations des OOUN (photocopies, distributeurs automatiques, laveries, etc.)</p></li>
			<li><p>Sur des sites de commande en ligne du OOUN ou d’autres établissements de l’Enseignement Supérieur</p></li>
		</ul>
		<p>Bientôt, La poste vous permettra de payer dans de nombreuses enseignes partenaires.</p>
	</div>	
	<div class="ou-payer-right col-md-6">
		<img style="float: right;" src="images/ooun.png">
	</div>	

	</div>
</div>

<?php
include_once "includes/footer.php";

?>
</body>
</html>
