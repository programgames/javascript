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
				getHtml : function (){
					return this.rue+ "<br>"+this.codePostal+ " "+ this.ville;
				}
			};
		},
	createPersonne : function (nom, prenom) {
		return{
			"nom": nom,
			"prenom" :prenom,
			"adresse":new Array(),
			modifPersonne : function(nom ,prenom){
				this.nom=nom;
				this.prenom=prenom
			},
			ajoutAdresse : function(adresse){
			this.adresse.push(adresse);
			},
			supprimerAdresse : function(adr){
				for(var i=0;i<this.adresse.length;i++){
					if(this.adresse[i].getRue()==adr.getRue()){
						if(this.adresse[i].getCodePostal()==adr.getCodePostal()){
							if(this.adresse[i].getVille()==	adr.getVille()){
								this.adresse.splice(i,1);
								return true;							
							}					
						}				
					}
				}
				return false;
			},
			searchAdresse : function ( rue, codePostal ,ville ) {
				var car=1;
				for(var i=0;i<this.adresse.length;i++){
					if(this.adresse[i].getRue()==rue){
						if(this.adresse[i].getCodePostal()==codePostal){
							if(this.adresse[i].getVille()==	ville){
								car=2;								
								return this.adresse[i];							
							}					
						}				
					}
				}
				return -1;	
			},
			getHtml : function () {
				var maVar = this.nom + " " +this.prenom +" : <br/>";
					
				for (var i=0;i<this.adresse.length;i++) {
					if(i>0){
						maVar+="<br/> "					
					}
					maVar+=this.adresse[i].getHtml();
					}
				return maVar;
			}
		};	
	},
	getHtmlObj : function (objet){
		return objet.getHtml();
	}	
}
var moi=metier.createPersonne("Matthias", "gaydu");
moi.ajoutAdresse(metier.createAddress("30 rue des boules",63200,"riom"));
moi.ajoutAdresse(metier.createAddress("31 rue des boules",63200,"riom"));
var adresse=moi.searchAdresse("30 rue des boules",63200,"riom");
if(adresse==-1){
	var codeHtmlL="<p> l'adresse n'existe pas </p>";
}
else{
	var codeHtmlL="<p>"+ adresse.getHtml()+"</p>";
}
var adresse2=moi.searchAdresse("36 rue des boules",63200,"riom");
if(adresse2==-1){
	var codeHtmlO="<p> l'adresse n'existe pas </p>";
}
else{
	var codeHtmlO="<p>"+ adresse.getHtml()+"</p>";
}
var testAdresse="<p>"+metier.getHtmlObj(metier.createAddress("30 rue de boules",63200,"riom"))+"<br/>"+metier.getHtmlObj(metier.createAddress("45 allée des peupliers",35145,"monCul"))+"</p>";
var codeHtml="<p>"+metier.getHtmlObj(moi)+"</p>";
moi.supprimerAdresse(metier.createAddress("31 rue des boules",63200,"riom"));
var codeHtmlf="<p>"+metier.getHtmlObj(moi)+"</p>";
document.getElementById("paragrapheTP").innerHTML =codeHtml;
document.getElementById("paragrapheTP2").innerHTML =codeHtmlL;
document.getElementById("paragrapheTP3").innerHTML =codeHtmlO;
document.getElementById("paragrapheTP4").innerHTML =codeHtmlf;
