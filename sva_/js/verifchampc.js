
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


           
// function formsendc() { 
//         var Login = document.getElementById('login').value;
//         var Mot_de_Passe = document.getElementById('pass').value;
//         var profil = document.getElementById('profil').value;
//     var xhr = new XMLHttpRequest();
//         var url = 'controlc.php';
//         xhr.open('POST', url, true);
//           xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');  
//           // mon code js
//         var params=
//     "Login="+Login+
//     "&Mot_de_Passe="+Mot_de_Passe+
//     "&profil="+profil;
//         xhr.onreadystatechange = function() {
//           //Call a function when the state changes.
//           if(xhr.readyState == 4 && xhr.status == 200) {
//               alert(xhr.responseText);
//           }
//         }
//         xhr.send(params);
//     }