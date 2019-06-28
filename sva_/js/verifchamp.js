function randomCode(min, max){
    return Math.round(Math.random() * (max - min) + min);
}
       
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



