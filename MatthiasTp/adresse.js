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
	}
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
codeHtml="<p>"+getHtmlObj(adresse)+"</p>";
document.getElementById("paragrapheTP").innerHTML =codeHtml;
