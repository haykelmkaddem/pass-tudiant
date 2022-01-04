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
<h1 style="font-size: 24px; text-decoration: none;"><a style="font-size: 24px; text-decoration: none; color: white;" href="index.php"><i class="fas fa-home"></i></a> / Foire aux questions</h1>	
</div>


<div class="container apropos-container">
	<div class="apropos-title">
		<h3>Trouvez des réponses aux questions les plus couramment posées</h3>
	</div>

	<div class="accordion">
		<h4><i class="fas fa-question-circle"></i> Pass-Etudiant, c'est quoi ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i> Pass-Etudiant est un service proposé par la poste tunisienne qui permet aux étudiants des universités de recharger un compte virtuel de repas et d'accéder aux restaurants universitaires simplement en utilisant leur carte étudiant pour débiter un repas.</p>
	</div>
	<div class="accordion">
		<h4><i class="fas fa-question-circle"></i> Qui peux créer un compte Pass-Etudiant ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i> Tous les étudiants des universités tunisiennes ayant fait leur inscription sur le site inscription.tn et ayant renseigné une adresse email valide</p>
	</div>
	<div class="accordion">
		<h4><i class="fas fa-question-circle"></i> Comment créer un compte sur Pass-Etudiant ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i> Positionnez-vous sur la page d'inscription et renseignez votre numéro de carte d'identité nationale (CIN). Dans le cas ou vous avez renseignez votre adresse email sur le site inscription.tn, vous recevrez sur votre boite de réception de l'email renseigné dans le site inscription.tn un lien sur le quel vous deverez cliquer pour valider votre compte. Si vous n'avez pas renseigné votre adresse email sur le site inscription.tn, vous serez amené à le faire avant de pouvoir créer un compte.</p>
	</div>
	
	<div class="accordion">
		<h4><i class="fas fa-question-circle"></i> J'ai perdu mon mot de passe, comment puisse-je le changer ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i>  Vous pouvez réinitialiser votre mot de passe en demandant un lien de changement de mot de passe sur la page de réinitialisation de mot de passe</p>
	</div>
	<div class="accordion">
		<h4><i class="fas fa-question-circle"></i> Avec quels moyens puisse-je recharger mon solde ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i> Vous pouvez recharger votre solde Pass-Etudiant avec des cartes postales ou bancaires tunisiennes</p>
	</div>
	<div class="accordion">
	<h4><i class="fas fa-question-circle"></i> Je n'ai pas reçu l'email de validation, que dois-je faire ?</h4>
	
	</div>
	
	<div class="panel">
	  <p><i class="far fa-hand-point-right"></i> Vérifiez le dossier spam de votre boite de réception. Si vous ne trouvez pas l'email, positionnez-vous sur la page d'envoie de l'email de validation et renseignez votre numéro de carte d'identité nationale (CIN). Dans le cas ou vous ne recevez pas encore l'email de validation de compte, veuillez nous contacter pour vous aider à activer votre compte Pass-Etudiant</p>
	</div>

</div>


<?php
include_once "includes/footer.php";

?>


  
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
</body>
</html>

