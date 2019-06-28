// function randomCode(min, max){
// 		return Math.round(Math.random() * (max - min) + min);
// 	}

// function random(){
// 	console.log(randomCode(1001, 9999));
// 	var code = randomCode(1001, 9999);
// 	document.getElementById('affich').innerHTML = 'le nombre genere est : '+code;
// }
function random(){

var affich = document.getElementById('affich');
var calendrierDH = new Date();

var an = calendrierDH.getFullYear();	
var mois = calendrierDH.getMonth();
var jour = calendrierDH.getDate();
var heure = calendrierDH.getHours();
var minute = calendrierDH.getMinutes();
var seconde = calendrierDH.getSeconds();
var tiers = calendrierDH.getTime();

if (mois<10) { mois= '0'+mois;}
if (jour<10) { jour= '0'+jour;}
if (heure<10) { heure= '0'+heure;}
if (minute<10) { minute= '0'+minute;}
if (seconde<10) { seconde= '0'+seconde;}
// if (mois<10) { mois= '0'+mois;}

Id_compte = "CPT00" + an + mois  + jour + heure + minute +seconde;
affich.innerHTML = 'la date est :' +Id_compte; 

}