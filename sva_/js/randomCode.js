function randomCode(min, max){
		return Math.round(Math.random() * (max - min) + min);
	}

function formsend(){
	console.log(randomCode(1001, 9999));
	var code = randomCode(1001, 9999);
	document.getElementById('affich').innerHTML = 'le nombre genere est : '+code;
}