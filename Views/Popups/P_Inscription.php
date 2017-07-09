<div id="popupInscription" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Inscription</h4>
			</div>
			<form method="POST" action="Controller/inscriptionMembre.php" data-toggle="validator" role="form" class="form-horizontal">
				<div class="modal-body">
					<div id="divPseudo" class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="Pseudo">Pseudo:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="Pseudo" name="Pseudo" onKeyUp="validationPseudo()" required>
							</div>
							<span id="PseudoValide" class="help-block"></span>
						</div>
					</div>
					<div class="col-sm-12">
							<label class="control-label" for="Nom">Nom:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="Nom" name="Nom"  required>
							</div>
							
						</div>
						<div class="col-sm-12">
							<label class="control-label" for="Prenom">Prenom:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="Prenom" name="Prenom"  required>
							</div>
							
						</div>
						<div class="col-sm-12">
							<label class="control-label" for="dateNaiss">Date de naissance:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="dateNaiss" name="dateNaiss"  required>
							</div>
							
						</div>
							
						
					<div id="divAdresseCourriel" class="form-group">
						<div class="col-sm-6">
							<label class="control-label" for="AdresseCourriel">Adresse courriel:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" class="form-control" id="AdresseCourriel" name="AdresseCourriel" onKeyUp="validationAdresseCourriel()" required>
							</div>
							<span id="AdresseCourrielValide" class="help-block"></span>
						</div>
						
						<div class="col-sm-6">
							<label class="control-label" for="ConfirmationAdresseCourriel">Confirmer votre adresse courriel:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="text" class="form-control" id="ConfirmationAdresseCourriel" name="ConfirmationAdresseCourriel" onKeyUp="validationAdresseCourriel()" required>
							</div>
							<span id="ConfirmationAdresseCourrielValide" class="help-block"></span>
						</div>
					</div>
					<div id="divMotDePasse" class="form-group">
						<div class="col-sm-6">
							<label class="control-label" for="MotDePasse">Mot de passe:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" id="MotDePasse" name="MotDePasse" onKeyUp="validationMotDePasse()" required>
							</div>
							<span id="MotDePasseValide" class="help-block"></span>
						</div>
						<div class="col-sm-6">
							<label class="control-label" for="ConfirmationMotDePasse">Confirmer votre mot de passe:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" id="ConfirmationMotDePasse" name="ConfirmationMotDePasse" onKeyUp="validationMotDePasse()" required>
							</div>
							<span id="ConfirmationMotDePasseValide" class="help-block"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button id="BoutonAnnuler" type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
					<button id="BoutonEnvoyer" type="submit" class="btn btn-success">Envoyer<i class="glyphicon glyphicon-send glyphicon-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>