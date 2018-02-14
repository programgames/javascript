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
				getHtml :function(){
					return this.rue+ "<br>"+this.codePostal+ " "+ this.ville;
				},
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
		};	
	},
	getHtmlObj : function ( objet ){
		return objet.getHtml();
	}	
}
var moi=metier.createPersonne("Matthias", "gaydu");
moi.ajoutAdresse(metier.createAddress("30 rue des boules",63200,"riom"));
var testAdresse="<p>"+metier.getHtmlObj(metier.createAddress("30 rue de boules",63200,"riom"))+"<br/>"+metier.getHtmlObj(metier.createAddress("45 allée des peupliers",35145,"monCul"))+"</p>";
var codeHtml="<p>"+metier.getHtmlObj(moi)+"</p>";
document.getElementById("paragrapheTP").innerHTML =codeHtml;
	