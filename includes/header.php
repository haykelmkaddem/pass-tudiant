
  <header>
		<div class="top-top d-none d-sm-block">
			<div class="container-fluid" style="height: 4px;"></div>
			<div class="container-fluid">
				<div class="row">
				<div class="col-md-7">
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-3"><p class="top-top-text"><b>+216 70 526 334</b></p></div>
						<div class="col-md-8"><p class="top-top-text"><b>contact@pass-etudiant.tn</b></p></div>
					</div>
				</div>
				<div class="col-md-5">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<div class="row">
								<div class="col-md-4"><i class="fab fa-twitter top-top-text"></i></div>
								<div class="col-md-4"><i class="fab fa-instagram top-top-text"></i></div>
								<div class="col-md-4"><i class="fab fa-facebook-f top-top-text"></i></div>
							</div>
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-2 top-top-text">
							<a href="#" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</header>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">se connecter</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input type="email" placeholder="Email" class="form-control login-input validate">
        </div>

        <div class="md-form mb-4">
          <input type="password" placeholder="Mot de passe" id="defaultForm-pass" class="form-control validate login-input">
        </div>

        <div class="md-form mb-4">
          <input type="submit"  class="form-control bg-blue login-input" style="color: white;">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
       <p>Nouveau sur Pass etudiant ? <a href="" data-toggle="modal" data-target="#modalSignupForm" data-dismiss="modal" aria-label="Close" style="color: #ed022e;">Créer une compte</a></p>
      </div>
    </div>
  </div>
</div>
<!--
<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div>-->
<div class="modal fade" id="modalSignupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Créer une compte</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <input type="text" placeholder="Nom" class="form-control login-input validate">
        </div>
        <div class="md-form mb-5">
          <input type="text" placeholder="Prénom" class="form-control login-input validate">
        </div>
        <div class="md-form mb-5">
          <input type="number" placeholder="Age" class="form-control login-input validate">
        </div>
        <div class="md-form mb-5">
          <input type="email" placeholder="Email" class="form-control login-input validate">
        </div>

        <div class="md-form mb-4">
          <input type="password" placeholder="Mot de passe" id="defaultForm-pass" class="form-control validate login-input">
        </div>
        <div class="md-form mb-4">
          <input type="submit"  class="form-control bg-blue login-input" style="color: white;" value="Créer une compte">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
       <p>Déja inscrit ? <a href="" data-toggle="modal" data-target="#modalLoginForm" data-dismiss="modal" aria-label="Close" style="color: #ed022e;">Se connecter</a></p>
      </div>
    </div>
  </div>
</div>