<!-- Projet Tuteuré - Spot WiFi-->
<!-- Exemple d'application. Jeu quiz sur la mesure du temps-->
<?php
$objets=array("anneaudepaysan"=>"Anneau de paysan","astrolabe"=>"Astrolabe","cadranduberger"=>"Cadran du berger","cadransolaire"=>"Cadran solaire","calendrierdespostes"=>"Calendrier des postes","calendriermaya"=>"Calendrier Maya","calendrierperpetuel"=>"Calendrier perpétuel","carotteglace"=>"Carotte de glace","clepsydre"=>"Clepsydre","chronometre"=>"Chronomètre","gnomon"=>"Gnomon","horlogeabougie"=>"Horloge à bougie","horlogeaencens"=>"Horloge à encens","horlogeafoliot"=>"Horloge à foliot","horlogeatomique"=>"Horloge atomique","horlogeparlante"=>"Horloge parlante","montre"=>"Montre","nocturlabe"=>"Nocturlabe","pointeuse"=>"Pointeuse","pouls"=>"Pouls","reveilmatin"=>"Réveil matin","sablier"=>"Sablier");

$aa=scandir(getcwd()."/temps");$data=array();
for($i=0;$i<count($aa);$i++){
	if(strpos($aa[$i],"jpg")!=false){$name=str_replace(".jpg","",$aa[$i]);
	array_push($data,array("type"=>$name,"label"=>$objets[$name],"img"=>"temps/".$aa[$i]));}}
//for($i=0;$i<count($data);$i++){echo $data[$i]["label"]." : <img src='".$data[$i]["img"]."' style='max-width:200px;max-height:200px'>  ";};exit;
$welcome="<div style='overflow: auto'><br ><p class='font-weight-bold'>Bonjour</p><br>Bienvenue sur notre projet<br><img src='img/iut-uca.png' style='width: 100px; height: 100px\'/><br></div>";
?>
<!DOCTYPE html>
<html id="master">
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="utf-8" />
	<title>Quiz-Mesure du temps</title>
	<script language="Javascript">

function DUMP(tableau, max){
	var fonc=function(tableau,name,prof,tabul){if (prof > max) {return name + ' - Max depth\n';}
        if (typeof(tableau) == 'object') {var enfant=null;var dumpRetour=tabul+name+'\n';
            tabul += '\t';for(var item in tableau){enfant=tableau[item];
                if(typeof(enfant)=='object'){dumpRetour+= fonc(enfant, item, prof + 1, tabul);}else{dumpRetour+=""+tabul+item+': '+enfant+'\n';}}}
        return dumpRetour;}
    return fonc(tableau,'',0,'')}

var data = <?php echo json_encode($data); ?>;
var onPlay=false,score=0
var divCadre,divMenu,divBottom,divQuiz,divImages,divAccueil
var quiz,images=""
window.onresize=RESIZE

var data12=[];
var data10=[];


function INIT(){
	divCadre=document.createElement('div');document.body.appendChild(divCadre);
	divMenu=document.createElement('div');document.body.appendChild(divMenu);
	divBottom=document.createElement('div');document.body.appendChild(divBottom);
	divQuiz=document.createElement('div');document.body.appendChild(divQuiz)
	divSkin=divImages=document.createElement('div');document.body.appendChild(divSkin)
	divImages=document.createElement('div');document.body.appendChild(divImages)
	divAccueil=document.createElement('div');document.body.appendChild(divAccueil)
	divAccueil.innerHTML="<div  style='text-align:center;overflow: auto;'><?php echo $welcome;?><br><button type='button' class='btn btn-primary' onclick='PLAY()' style='cursor:pointer;cursor:hand;font-size:25px;font-weight:bold'>Play</button><br><br><button type='button' class='btn btn-primary' onclick='INSTRUCTION()' style='cursor:pointer;cursor:hand;font-size:15px;font-weight:bold'>Instructions</button><p>Créer par Julien Marcon</p></div>";

	RESIZE()
}
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {


	ev.dataTransfer.setData("text", ev.target.id);

}

function drop(ev) {

    var depot = ev.target || ev.srcElement;


	if(divSkin.firstElementChild.childElementCount == 1) { // on peut pas mettre plusieurs images ds mm tuile
		return;

	}
	ev.preventDefault();

    var da = ev.dataTransfer.getData("text");
	divBottom.innerHTML="Score="+score+" points";


    console.log("image drop: " + da)
    console.log("id de la div: " +depot.id)
    var tmp = depot.id // "label"
    var regex = /0/gi;
    var finale = tmp.replace(regex, "")

    //console.log("f="+finale)
    //console.log("img="+da)


    if( finale.localeCompare(da) == 0){
        //alert("Bonne réponse")
        document.getElementById(da).style.maxWidth = '100%';
        document.getElementById(da).style.maxHeight= '100%';
        document.getElementById(da).style.height = '100%';
        document.getElementById(da).style.width = '100%';
        ev.target.appendChild(document.getElementById(da));
        score = score +50;
        

    }
    else{
        score = score -10;
    }


    if (divImages.childElementCount == 2    ){
        confirm("Fin de la partie, vous avez fait un score de " + score + " points.")
    }

}

function INSTRUCTION(){


}

function afficherTuiles(){

    for(i=0;i<=9;i++){
        tmp= data10[i]["type"] + "0"
        divSkin.innerHTML+="<div> <div id='" + tmp + "' ondrop='drop(event)' ondragover='allowDrop(event)' style='border: 10px solid #aaaaaa;height: 110px; width: 150px;margin-top:0px;'></div>" +
            "<div style='z-index:8;text-align: center; '><p style='color=red;'>  "+data10[i]["label"]+"</p></div></div>";
    }
}



function RESIZE(){
	divCadre.style.cssText="position:absolute;top:0%;height:100%;left:0%;width:100%;z-index:0;background-color:#BBBBBB";
	var h=divCadre.offsetHeight;
	divMenu.style.cssText="position:fixed;top:0%;height:0px;left:0%;width:100%;z-index:1;background-color:pink";
	divBottom.style.cssText="text-align:center;position:fixed;top:"+(h-25)+"px;height:25px;left:0%;width:100%;z-index:6;background-color:pink";
	divQuiz.style.cssText="position:fixed;top:0px;height:"+(h-25)+"px;left:0%;width:70%;z-index:3;background-color:lightgreen; =";
	divSkin.style.cssText=" display: flex; justify-content: center;position:absolute;top:25px;height:"+(h-50)+"px;left:0%;width:70%;z-index:4;display:flex;flex-flow:row wrap;justify-content:space-around;align-items:flex-start";
	if(!onPlay){divSkin.style.cssText="position:absolute;top:0px;height:100%;left:0%;width:100%;z-index:4;background-color:black;opacity:0.3";}
	divImages.style.cssText="id:test;overflow-y:auto;overflow-x:hidden;position:fixed;top:0px;height:"+(h-0)+"px;left:70%;width:30%;z-index:5;user-select :none;background-color:lightblue;display:flex;flex-flow:row wrap;justify-content:space-around;align-items:flex-start";
	divAccueil.style.cssText="class='panel-body';position:absolute;top:25%;height:60%;left:15%;width:50%;z-index:-1;background-color:yellow";
	if(!onPlay){divAccueil.style.zIndex=6}
}


function AFFICHERIMAGES() { // si = 0 affiche le score?

    for (i = 0 ; i <= 11; i++) {
        divImages.innerHTML += "<img class='img-thumbnail' id='" + data12[i]["type"] + "' draggable='true' ondragstart='drag(event)' style='max-height: 110px' src='" + data12[i]["img"] + "'>";
    }
}
/*
function MELANGE(){
	 for(i=data.length-1;i>=0;i--){
		 var j = Math.floor(i*Math.random());
		 var k=data[j];data[j]=data[i];data[i]=k
	 }

console.log(" data="+DUMP(data,3))
 }
 */
function MELANGE_by_TAB(tab){
    for(i=tab.length-1;i>=0;i--){
        var j = Math.floor(i*Math.random());
        var k=tab[j];tab[j]=tab[i];tab[i]=k
    }
    console.log( "data melangée ="+DUMP(tab,3))
}



function COPY_TAB(tabSource, tabDest, nb){
    for(i=0;i<nb;i++){
        tabDest[i]=tabSource[i];
    }
    console.log("new tab"+DUMP(tabDest,3))
}



function PLAY(){
    //MELANGE();
    MELANGE_by_TAB(data);

    onPlay=true;
    score=1000;
    RESIZE();
    UPDATE_SCORE();

    COPY_TAB(data,data12,12);
    AFFICHERIMAGES();

    MELANGE_by_TAB(data12);
    COPY_TAB(data12,data10,10);
    MELANGE_by_TAB(data10);
    afficherTuiles();

}

function UPDATE_SCORE(){
	score=score-1
	divBottom.innerHTML="Score="+score+" points"
	setTimeout(function(){UPDATE_SCORE()},1000) // mettre le setTimeout dans une variable pour le glisser deposer
}



	</script>
	</head>
	<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
	</body>
	<script>INIT()</script>
</html>	
