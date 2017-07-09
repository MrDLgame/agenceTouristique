
<div id="popupConnexion" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Connexion</h4>
			</div>
			<form method="POST" action="Controller/connectionMembre.php" data-toggle="validator" role="form" class="form-horizontal">
				<div class="modal-body">
					<div id="divPseudo" class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="Pseudo">Pseudo:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" id="Pseudo" name="Pseudo" required>
							</div>
							<span id="PseudoValide" class="help-block"></span>
						</div>
					</div>
					<div id="divMotDePasse" class="form-group">
						<div class="col-sm-12">
							<label class="control-label" for="MotDePasse">Mot de passe:</label>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" id="MotDePasse" name="MotDePasse" required>
							</div>
							<span id="MotDePasseValide" class="help-block"></span>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
					<button type="submit" class="btn btn-success">Envoyer<i class="glyphicon glyphicon-send glyphicon-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</div>