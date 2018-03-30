<!-- Projet Tuteuré - Spot WiFi-->
<!-- Exemple d'application. Jeu quiz sur la mesure du temps-->
<?php
$objets=array("anneaudepaysan"=>"Anneau de paysan","astrolabe"=>"Astrolabe","cadranduberger"=>"Cadran du berger","cadransolaire"=>"Cadran solaire","calendrierdespostes"=>"Calendrier des postes","calendriermaya"=>"Calendrier Maya","calendrierperpetuel"=>"Calendrier perpétuel","carotteglace"=>"Carotte de glace","clepsydre"=>"Clepsydre","chronometre"=>"Chronomètre","gnomon"=>"Gnomon","horlogeabougie"=>"Horloge à bougie","horlogeaencens"=>"Horloge à encens","horlogeafoliot"=>"Horloge à foliot","horlogeatomique"=>"Horloge atomique","horlogeparlante"=>"Horloge parlante","montre"=>"Montre","nocturlabe"=>"Nocturlabe","pointeuse"=>"Pointeuse","pouls"=>"Pouls","reveilmatin"=>"Réveil matin","sablier"=>"Sablier");

$bib2 = array(
    'anneaudepaysan' => array('Anneau de paysan', '
Un anneau de paysan, aussi connu sous le nom de bague solaire ou cadran annulaire, est un cadran solaire apparu au XVe siècle avec les travaux de Regiomontanus, ayant la forme d\'un anneau portatif pouvant être réglé suivant la date, et donnant l\'heure solaire.'),
    'astrolabe' => array('Astrolabe','L\'astrolabe est un ancien instrument astronomique. Outil aux fonctions multiples, il permet notamment de mesurer la hauteur des astres et de lire l\'heure en fonction de la position des étoiles ou du soleil.
'),
    'cadranduberger' => array('Cadran du berger','Un cadran de berger est un cadran solaire de hauteur, portable, permettant de lire l´heure sur une surface verticale.'),
    'cadransolaire' => array('Cadran solaire','Un cadran solaire est un instrument silencieux et immobile qui indique le temps solaire par le déplacement de l\'ombre d\'un objet de forme variable, le gnomon ou le style, sur une surface, la table du cadran, associé à un ensemble de graduations tracées sur cette surface.'),
    'calendrierdespostes' => array('Calendrier des postes','Le calendrier français dit "des fleuristes" est repris par l\'almanach du facteur (autrefois almanach des P.T.T., calendrier des postes ou calendrier de la Poste), ainsi que par la plupart des agendas et des calendriers édités en France.'),
    'calendriermaya' => array('Calendrier Maya','Le calendrier maya était la version maya du calendrier mésoaméricain, composé de différents systèmes calendaires évoluant de manière concomitante.'),
    'calendrierperpetuel'=> array('Calendrier perpétuel','Un calendrier perpétuel indique le jour de la semaine pour n\'importe quelle date, « quelle que soit l\'année » par opposition au calendrier courant qui se limite à l\'année en cours.'),
    'carotteglace'=> array('Carotte de glace','Une carotte de glace est un échantillon, retiré de calottes glaciaires, formé par compression de couches de neiges successives, année après année : une découpe verticale de glace contient donc des couches de plus en plus anciennes à mesure qu\'on s\'enfonce vers le centre de la Terre.'),
    'clepsydre'=> array('Clepsydre','
À l\'origine, la clepsydre est un instrument à eau qui permet de définir la durée d\'un évènement, la durée d\'un discours par exemple. On contraint la durée de l’évènement au temps de vidage d\'une cuve contenant de l\'eau qui s\'écoule par un petit orifice.
'),
    'chronometre' => array('Chronomètre','Un chronomètre désigne un instrument de mesure du temps. Son nom est dérivé du grec khrónos (χρόνος), signifiant le temps et du latin metrum signifiant mesurer.'),
    'gnomon' => array('Gnomon','Un gnomon (du lat. gnomon, onis dérivé de γνώμων « indicateur, interpréteur ») est un instrument astronomique qui visualise par son ombre les déplacements du Soleil sur la voute céleste.
'),
    'horlogeabougie' => array('Horloge à bougie','Une bougie était graduée sur le côté en heures d\'égales longueurs. Au fur et à mesure que la bougie brûlait, on pouvait voir combien de temps s\'était écoulé.
'),
    'horlogeaencens' => array('Horloge à encens','La combustion lente et régulière d\'un bâtonnet d\'encens horizontal brûlait le fil auquel était reliée une bille . La chute sonore de celle-ci dans un récipient de métal prévenait les utilisateurs de l\'écoulement d\'un certain laps de temps. '),
    'horlogeafoliot'=> array('Horloge à foliot','Un foliot est un balancier vertical utilisé dans les premières horloges au XIVe siècle.  Son principe : un poids suspendu à une corde fournit de l\'énergie à la machine tandis qu\'un système de verge et de foliot interrompt régulièrement la chute du poids.'),
    'horlogeatomique'=> array('Horloge atomique','Une horloge atomique est une horloge qui utilise la pérennité et l\'immuabilité de la fréquence du rayonnement électromagnétique émis par un électron lors du passage d\'un niveau d\'énergie à un autre pour assurer l\'exactitude et la stabilité du signal oscillant qu\'elle produit.'),
    'horlogeparlante' => array('Horloge parlante','Une horloge parlante est un dispositif annonçant l\'heure courante de manière automatisée et sous forme orale (enregistrements ou synthèse), généralement par le biais d\'un service téléphonique.
'),
    'montre' => array('Montre','Une montre diffère d’une horloge, d’une pendule ou de tout autre instrument de mesure du temps par le fait qu’elle peut être emportée lors de déplacements sans que son fonctionnement soit altéré.
'),
    'nocturlabe'=> array('Nocturlabe','Un nocturlabe ou nocturnal est un ancien instrument utilisé pour déterminer l\'écoulement du temps en fonction de la position d\'une étoile dans le ciel nocturne.'),
    'pointeuse'=> array('Pointeuse','Une pointeuse ou badgeuse, également appelée timbreuse (en Suisse), est une machine qui permet d’enregistrer le temps de travail d’un salarié.
'),
    'pouls'=> array('Pouls','Le pouls est la perception du flux sanguin pulsé par le cœur par la palpation d\'une artère.'),
    'reveilmatin'=> array('Réveil matin','
Un réveil-matin est un système qui émet un son à une heure pré-déterminée. On l\'utilise généralement pour se réveiller le matin, d\'où son nom.'),
    'sablier'=> array('Sablier','Un sablier est un instrument qui permet de mesurer un intervalle de temps correspondant à la durée d\'écoulement d\'une quantité calibrée de « sable », à l\'intérieur d\'un récipient transparent.')
);
$aa=scandir(getcwd()."/temps");
$data=array();
/*
for($i=0;$i<count($aa);$i++){
	if(strpos($aa[$i],"jpg")!=false){
	    $name=str_replace(".jpg","",$aa[$i]);
	    array_push($data,array("type"=>$name,"label"=>$objets[$name],"img"=>"temps/".$aa[$i]));}
}
*/
for($i=0;$i<count($aa);$i++){
    if(strpos($aa[$i],"jpg")!=false){
        $name=str_replace(".jpg","",$aa[$i]);
        array_push($data,array("type"=>$name,"label"=>$bib2[$name][0],"def"=>$bib2[$name][1],"img"=>"temps/".$aa[$i]));
    }
}


//for($i=0;$i<count($data);$i++){echo $data[$i]["label"]." : <img src='".$data[$i]["img"]."' style='max-width:200px;max-height:200px'>  ";};exit;
$welcome="<div style='overflow: auto'><br ><p class='font-weight-bold'>Bonjour</p><br>Bienvenue sur notre projet<br><img src='img/iut-uca.png' style='width: 100px; height: 100px\'/><br></div>";
?>
<!DOCTYPE html>
<html id="master">
	<head>
        <link rel="stylesheet" href="css/style.css">
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
    divAccueil.innerHTML="<div  style='text-align:center;overflow: auto;'><?php echo $welcome;?><br><button type='button' class='btn btn-primary' onclick='PLAY()' style='cursor:pointer;cursor:hand;font-size:25px;font-weight:bold'>Play</button><br><br><button id='myBtn' type='button' class='btn btn-primary' onclick='INSTRUCTION()' style='cursor:pointer;cursor:hand;font-size:15px;font-weight:bold'>Instructions</button><div id='myModal' class='modal'> <div class='modal-content'><span class='close'>&times;</span><p>instructions : </p></div> </div><p>Créer par Julien Marcon</p></div>";

    var modal = document.getElementById('myModal');
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

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

        document.getElementById(da).style.maxWidth = '100%';
        document.getElementById(da).style.maxHeight= '100%';
        document.getElementById(da).style.height = '100%';
        document.getElementById(da).style.width = '100%';
        ev.target.appendChild(document.getElementById(da));
        score = score +50;

        var indice = indexOfTabByType(da);
        alert(data10[indice]["def"])

    }
    else{
        score = score -10;
    }


    if (divImages.childElementCount == 2    ){
        confirm("Fin de la partie, vous avez fait un score de " + score + " points.")
    }

}

function indexOfTabByType(type){
    for(i=0;i<data10.length;i++) {
        if( type.localeCompare(data10[i]["type"]) == 0){
            return i;
        }
    }

}


function INSTRUCTION(){


}

function afficherTuiles(){

    for(i=0;i<=9;i++){
        tmp= data10[i]["type"] + "0"
        divSkin.innerHTML+="<div> <div id='" + tmp + "' ondrop='drop(event)' ondragover='allowDrop(event)' style='border: 10px solid #aaaaaa;height: 110px; width: 150px;margin-top:0px;'></div>" +
            "<div style='z-index:8;text-align: center; '><p style='color=red; font-weight: bold;'>  "+data10[i]["label"]+"</p></div></div>";
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
    console.log("$data origine : "+DUMP(data,3))


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
    <script src="DragDropTouch.js"></script>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
	</body>
	<script>INIT()</script>
</html>	
