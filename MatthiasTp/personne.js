var personne ={
	"nom":"nom",
	"prenom" :"prenom",
	"adresse":new Array(),
  modifPersonne : function(nom ,prenom){
    this.nom=nom;
    this.prenom=prenom
    },
    ajoutAdresse: function(adresse){
      this.adresse.push(adresse);
    },
    getHtml :function(){
				var maVar = this.nom + " " +this.prenom +" : <br/>";
				
				for (var i=0;i<this.adresse.length;i++) {
					if(i>0){
						maVar+="<br/> "					
					}
					maVar+=this.adresse[i].getHtml();
				}
				return maVar;
	}
}
var adresse ={
	"rue":"30 rue des boules",
	"codePostal":63200,
	"ville":"Riom",
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
	getHtml :function(){
		return this.rue+ "<br>"+this.codePostal+ " "+ this.ville;
	},
};

var getHtmlObj= function(objet){
	return objet.getHtml()
};
personne.ajoutAdresse(adresse);
codeHtml="<p>"+personne.getHtml()+"</p>";
document.getElementById("paragrapheTP").innerHTML =codeHtml;