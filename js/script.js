var PseudoCorrect = false;
var AdresseCourrielCorrect = false;
var MotDePasseCorrect = false;
var boutonEnvoyer = document.getElementById('BoutonEnvoyer');

var chiffres = /[0-9]/;
var lettresMinuscules = /[a-z]/;
var lettresMajuscules = /[A-Z]/;

function reinitialiserInscription() {
	document.getElementById('Pseudo').value = "";
	$('#PseudoValide').text("");
	$('#divPseudo').removeClass('has-success');
	$('#divPseudo').removeClass('has-error');

	document.getElementById('AdresseCourriel').value = "";
	$('#AdresseCourrielValide').text("");
	$('#divAdresseCourriel').removeClass('has-success');
	$('#divAdresseCourriel').removeClass('has-error');

	document.getElementById('ConfirmationAdresseCourriel').value = "";
	$('#ConfirmationAdresseCourrielValide').text("");

	document.getElementById('MotDePasse').value = "";
	$('#MotDePasseValide').text("");
	$('#divMotDePasse').removeClass('has-success');
	$('#divMotDePasse').removeClass('has-error');

	document.getElementById('ConfirmationMotDePasse').value = "";
	$('#ConfirmationMotDePasseValide').text("");

	boutonEnvoyer.disabled = true;
}

function validationPseudo() {
	if ($('#Pseudo').val() != "") {
		if ($('#Pseudo').val().length < 6) {
			$('#PseudoValide').text("Votre pseudo doit faire au moins 6 caractères ! =(");
			$('#divPseudo').removeClass('has-success');
			$('#divPseudo').addClass('has-error');
			PseudoCorrect = false;
			activerBoutonEnvoyer();
		} else {
			$('#PseudoValide').text("Votre pseudo semble valide. =)");
			$('#divPseudo').removeClass('has-error');
			$('#divPseudo').addClass('has-success');
			PseudoCorrect = true;
			activerBoutonEnvoyer();
		}
	} else {
		$('#PseudoValide').text("Vous n'avez pas mis de pseudo ! =(");
		$('#divPseudo').removeClass('has-success');
		$('#divPseudo').addClass('has-error');
		PseudoCorrect = false;
		activerBoutonEnvoyer();
	}
}

function validationAdresseCourriel() {
	var reg = new RegExp('^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$', 'i');
	if ($('#AdresseCourriel').val() == $('#ConfirmationAdresseCourriel').val() && $('#AdresseCourriel').val() != "") {
		if (!reg.test($('#AdresseCourriel').val())) {
			$('#AdresseCourrielValide').text("Ceci ne ressemble pas à une adresse courriel ! =(");
			$('#ConfirmationAdresseCourrielValide').text("Ceci ne ressemble pas à une adresse courriel ! =(");
			$('#divAdresseCourriel').removeClass('has-success');
			$('#divAdresseCourriel').addClass('has-error');
			AdresseCourrielCorrect = false;
			activerBoutonEnvoyer();
		} else {
			$('#AdresseCourrielValide').text("Votre adresse courriel semble valide. =)");
			$('#ConfirmationAdresseCourrielValide').text("Votre adresse courriel semble valide. =)");
			$('#divAdresseCourriel').removeClass('has-error');
			$('#divAdresseCourriel').addClass('has-success');
			AdresseCourrielCorrect = true;
			activerBoutonEnvoyer();
		}
	} else {
		if ($('#AdresseCourriel').val() == "" && $('#ConfirmationAdresseCourriel').val() == "") {
			$('#AdresseCourrielValide').text("Votre adresse courriel est invalide ! =(");
			$('#ConfirmationAdresseCourrielValide').text("Votre adresse courriel est invalide ! =(");
		} else {
			$('#AdresseCourrielValide').text("Les addresses ne correspondent pas ! =(");
			$('#ConfirmationAdresseCourrielValide').text("Les addresses ne correspondent pas ! =(");
		}
		$('#divAdresseCourriel').removeClass('has-success');
		$('#divAdresseCourriel').addClass('has-error');
		AdresseCourrielCorrect = false;
		activerBoutonEnvoyer();
	}
}

function validationMotDePasse() {
	if ($('#MotDePasse').val() == $('#ConfirmationMotDePasse').val() && $('#MotDePasse').val() != "") {
		if ($('#MotDePasse').val().length < 6) {
			$('#MotDePasseValide').text("Votre mot de passe doit faire au moins 6 caractères ! =(");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe doit faire au moins 6 caractères ! =(");
			$('#divMotDePasse').removeClass('has-success');
			$('#divMotDePasse').addClass('has-error');
			MotDePasseCorrect = false;
			activerBoutonEnvoyer();
		} else if (!chiffres.test($('#MotDePasse').val())) {
			$('#MotDePasseValide').text("Votre mot de passe doit comporter au moins 1 chiffre ! =(");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe doit comporter au moins 1 chiffre ! =(");
			$('#divMotDePasse').removeClass('has-success');
			$('#divMotDePasse').addClass('has-error');
			MotDePasseCorrect = false;
			activerBoutonEnvoyer();
		} else if (!lettresMinuscules.test($('#MotDePasse').val())) {
			$('#MotDePasseValide').text("Votre mot de passe doit comporter au moins 1 lettre miniscule ! =(");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe doit comporter au moins 1 lettre miniscule ! =(");
			$('#divMotDePasse').removeClass('has-success');
			$('#divMotDePasse').addClass('has-error');
			MotDePasseCorrect = false;
			activerBoutonEnvoyer();
		} else if (!lettresMajuscules.test($('#MotDePasse').val())) {
			$('#MotDePasseValide').text("Votre mot de passe doit comporter au moins 1 lettre majuscule ! =(");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe doit comporter au moins 1 lettre majuscule ! =(");
			$('#divMotDePasse').removeClass('has-success');
			$('#divMotDePasse').addClass('has-error');
			MotDePasseCorrect = false;
			activerBoutonEnvoyer();
		} else {
			$('#MotDePasseValide').text("Votre mot de passe semble valide. =)");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe semble valide. =)");
			$('#divMotDePasse').removeClass('has-error');
			$('#divMotDePasse').addClass('has-success');
			MotDePasseCorrect = true;
			activerBoutonEnvoyer();
		}
	} else {
		if ($('#MotDePasse').val() == "" && $('#ConfirmationMotDePasse').val() == "") {
			$('#MotDePasseValide').text("Votre mot de passe est invalide ! =(");
			$('#ConfirmationMotDePasseValide').text("Votre mot de passe est invalide ! =(");
		} else {
			$('#MotDePasseValide').text("Les mots de passe ne correspondent pas ! =(");
			$('#ConfirmationMotDePasseValide').text("Les mots de passe ne correspondent pas ! =(");
		}
		$('#divMotDePasse').removeClass('has-success');
		$('#divMotDePasse').addClass('has-error');
		MotDePasseCorrect = false;
		activerBoutonEnvoyer();
	}
}

function activerBoutonEnvoyer() {
	if (PseudoCorrect && AdresseCourrielCorrect && MotDePasseCorrect) {
		boutonEnvoyer.disabled = false;
	} else {
		boutonEnvoyer.disabled = true;
	}
}