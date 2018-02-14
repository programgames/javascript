codeHTML = "ALERTE AUX GAREEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEn";

var metier ={
    "nom":"monMetier",

    createAddress : function(rue, codePostal,ville){
        if(!(typeof rue =="string")||!(typeof codePostal =="number")||!(typeof ville =="string")){
            throw new Error("invalide construtor arguments");
        };
        return{
            "rue":rue,
            "codePostal":codePostal,
            "ville":ville,
            persoAddr : function(rue, codePostal,ville){
                if(!(typeof rue =="string")||!(typeof codePostal =="number")||!(typeof ville =="string")){
                    throw new Error("invalide construtor arguments");
                }
                this.rue=rue;
                this.codePostal=codePostal;
                this.ville=ville;
                return this;
            },
            getAdresse : function(){
                return this.rue + " "+this.codePostal+ " "+this.ville;
            },
            getRue : function(){
                return this.rue;
            },
            getCodePostal : function(){
                return this.codePostal;
            },
            getVille : function(){
                return this.ville;
            },



        };
    },
        createPerson: function(nom,prenom){

        return {
            "nom":nom,
            "prenom" :prenom,
            "adresse":new Array(),

            getNom : function(){
                return this.nom;
            },
            getAdresse : function(){
                return this.prenom;
            },
            ajoutAdresse: function(adresse){
                this.adresse.push(adresse);
            },
        };
        }

}


var vue ={

    getHtml :function(metier){
        return metier.rue+ "<br>"+metier.codePostal+ " "+ metier.ville;
    }
}


<!-- ------------------------------------------------ !-->
var ttc = function(prixHT, tauxTVA){
	if(!(typeof prixHT == "number") || !(typeof tauxTVA == "number")){
		throw new Error("Fonction tva appele avec param incorrect");
	}
	return prixHT*(1.0+tauxTVA/100.0);
};

try{
	codeHTML += "Prix ttc : " + ttc(180.0,19.6);
}catch(err){
	alert(err);
}
<!-- ------------------------------------------------ !-->

codeHTML2 = metier.createPerson("maman","karine",metier.createAddress("garen",43000,"marnhac")).getNom();
// codeHTML2 =  vue.getHtml(metier.createAddress("garen",43000,"marnhac"));


document.getElementById("para2").innerHTML = codeHTML2;
