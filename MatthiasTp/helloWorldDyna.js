document.getElementById("paragrapheResultat").innerHTML="hello WOrld";


var somme= function (nombre1,nombre2){
	if(!(typeof nombre1 =="number")|| !(typeof nombre2 =="number")){
		throw new Error("Fucntion somme avec parametre incorect")
	}
	return nombre1+nombre2;
}
document.getElementById("paragrapheSomme").innerHTML=somme(4,5).toString();