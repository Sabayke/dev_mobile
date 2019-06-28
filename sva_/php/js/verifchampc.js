var valid = document.getElementById('connexion');
valid.addEventListener('submit', function(e){
	var login = document.getElementById('login');
	var pass = document.getElementById('pass');
	var type = document.getElementById('profil');
	var log_m = document.getElementById('veriflog');
	var passs_m = document.getElementById('verifpasss');

	if (login.validity.valueMissing) {
		e.preventDefault();
		log_m.textContent = "Champ login vide";
		log_m.style.color = "red";
	}
	if (pass.validity.valueMissing) {
		e.preventDefault();
		log_m.textContent = "Champ mot de passe vide";
		log_m.style.color = "red";
	}

})

function surligne(champ, erreur){
		if (erreur) {
			champ.style.backgroundColor = "#fba";
		}
		else
			champ.style.backgroundColor = "rgba(10,180,20,0.2)";
	
}
function verifchamp(champ){
	if (champ.value.length < 3 ) {
		surligne(champ, true);
		return false;
		}
	else{
		surligne(champ, false);
		return true;
	}
}