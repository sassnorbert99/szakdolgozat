<style type="text/css">
	body {
  background: #000;
}


.button {
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#page-wrap { width: 500px; margin: 0 auto;}
 
 
#quiz input {
    vertical-align: middle;
}
 
#quiz ol {
   margin: 0 0 10px 20px;
}
 
#quiz ol li {
   margin: 0 0 20px 0;
}
 
#quiz ol li div {
   padding: 4px 0;
}
 
#quiz h3 {
   font-size: 17px; margin: 0 0 1px 0; color: #666;
}
 
#results {
    font: 44px Georgia, Serif;
}


.shimmer {
  font-family: "Lato";
  font-weight: 300;
  font-size: 3em;
  margin: 0 auto;
  padding: 0 140px 0 0;
  display: inline;
  margin-bottom: 0;
}

.shimmer {
  text-align: center;
  color: rgba(255,255,255,0.1);
  background: -webkit-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: -moz-gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  background: gradient(linear, left top, right top, from(#222), to(#222), color-stop(0.5, #fff));
  -webkit-background-size: 125px 100%;
  -moz-background-size: 125px 100%;
  background-size: 125px 100%;
  -webkit-background-clip: text;
  -moz-background-clip: text;
  background-clip: text;
  -webkit-animation-name: shimmer;
  -moz-animation-name: shimmer;
  animation-name: shimmer;
  -webkit-animation-duration: 2s;
  -moz-animation-duration: 2s;
  animation-duration: 2s;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  background-repeat: no-repeat;
  background-position: 0 0;
  background-color: #222;
}
@-moz-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-webkit-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@-o-keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}
@keyframes shimmer {
  0% {
    background-position: top left;
  }
  100% {
    background-position: top right;
  }
}

.fade-in {
  animation: fadeIn ease 10s;
  -webkit-animation: fadeIn ease 10s;
  -moz-animation: fadeIn ease 10s;
  -o-animation: fadeIn ease 10s;
  -ms-animation: fadeIn ease 10s;
}
@keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
}




.modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%

}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}


.center {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}

.centere {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
.container { 
  height: 200px;
  position: relative;
  border: 3px solid green; 
}
</style>

<!--<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
.style1 {
	text-align: left;
}
.style2 {
	margin: 4px;
}
</style>
</head>-->
<table style="width: 95%;margin: 0 auto;" >
	<tr >
    <td colspan="2">
    <h1 id="equipmenttitle" class="shimmer">Hell-harang működési elve</h1>
  </td>
    <td>
    </td>

  </tr>
	<tr>
		
		<!--<h4>Működési elv: </h4>-->
		<br>
    <td>

<table style=" margin: 0 auto;" align="center">
	<tr>
		
		<!--<h4>Működési elv: </h4>-->
		<br>
<div style="text-align: center; " align="justify">
<img class="style2" alt="hell.jpeg" hspace="20" vspace="10" align="left" src="<?php echo base_url()?>/assets/images/hell.jpeg" style="border-radius: 10%" width="300" >
<div class="fade-in" align="justify" >
	Az 1700-as évek végén Hell Miksa, csillagász, matematikus és fizikus jelölte ki az egri Líceum egyik termének padlóján az ott áthaladó észak-déli tájolású meridián vonalat. Ennek a vonalnak a segítségével tudták meghatározni a csillagászati dél pontos időpontját Egerben. Ez úgy történhetett, hogy a vonal felett kb 5 méter magasan a terem falán található egy kis nyílás, ahol a nap sugarai beszűrődnek, és egy kis fényfolt jelenik meg a terem padlóján napsütéses időben. Amikor a fény a meridián vonalra vetül, az a helyi dél időpontja.
<br>
Ez 11 óra 25 perc és 11 óra 50 perc körül ingadozik az évszaknak megfelelően, amit téli időszámítás szerint értünk. A vonalon jelölve van a fényfolt éves mozgásának 2 végpontja, ami a nyári és a téli napfordulóknak felel meg. Amikor még ezt a fajta időmeghatározást használták, akkor még egy zsineget is kifeszítettek a vonal fölé aminek a segítségével még pontosabban tudták meghatározni a delelés időpontját.
<br>
Amikor Egerben bekövetkezett a csillagászati dél időpontja, a Líceum teraszán egy kis harangot szólaltattak meg, melyet adományozója, Hell Miksa után Hell-harangnak neveznek. Ez a fajta időmeghatározás persze megfigyelés alapján történt. Lent a meridián vonalnál egy arra kijelölt személy figyelte a fényfolt mozgását, majd ha az középre ért, jelt adott a harang megszólaltatására. Ezzel jelezték a város lakói számára a helyi delet. Először a csillagvizsgalóban szólalt meg a kis harang, majd ahogy ezt meghallották, úgy szólaltak meg a település templomjainak harangjai is.
<br>
Azonban 1891-ben a zónaidő bevezetésével ez a hagyomány háttérbe szorult, és csak mint kiállítási darab volt megtekinthető maga a harang.
<br>
Célunk volt, hogy ezt a hagyományt visszaállítsuk, azonban már a mai modern informatikai eszközök segítségével, ezért egy olyan komplex rendszert alkottunk meg, mely emberi erőforrást nem igényel, azonban mégis a meglévő meridián vonal segítségével tudjuk meghatározni Egerben a helyi dél időpontját.
<br>
Kezdetben több lehetőséget is megvizsgáltunk, aminek a segítségével ezt megtehetjük, viszont mivel műemlékről van szó, így korlátozott lehetőségeink voltak. Ezért döntöttünk úgy, hogy egy kamera segítségével fogjuk figyelni a meridián vonalat, így nem volt szükség semmiféle módosításra az épületben (pl.: fal vésése, vezetékek kihúzása a padlóra).
<br>
A rendszer egyik fő alkotóeleme az úgynevezett Raspberry Pi, amely egy kis számítógép melynek tartozéka a kamera. A harang megszólaltatásáér a Líceum teraszán pedig egy mikrokontroller a felelős, mely rendelkezik vezeték nélküli kommunikációval.
<br>
A rendszer használatához legelőször egy kalibrációs eljárást kell végrehajtanunk, mellyel a 3 fő pontot határozzuk meg a meridián vonalon (nyári napforduló, téli napforduló, töréspont). A kamera rögzítése után 3 fényforrást helyezünk el ezeknél a nevezetes pontoknál. Ezt követően a cél ennek a 3 kalibrációs pontnak a meghatározása a képen, mely ugyan azon a képfeldolgozási lépéseken megy keresztül, mint a fényfolt detektálásakor, pixelkoordinátákkal kifejezve. Ezzel már tudjuk hogy a meridián vonal hol helyezkedik el a képen, és annak középvonala. Ezt a kalibrációt bizonyos időközönként érdemes megismételni azért, hogy meggyőződjünk róla, hogy nem mozdult el a kamera.
<br>
Miután végeztünk a kalibrációs folyamattal, a rendszer használatra kész. Bizonyos időközönként képeket készítünk a meridián vonalról, majd azokat elemezzük. Amikor a program úgy ítéli meg, hogy Egerben bekövetkezett a helyi dél időpontja utasítja a teraszon található harang vezérlését és megszólaltatja azt.
<br>
A fejlesztés során több hibalehetőséggel is számolnunk kellett. Például ha a terem lámpái túl erősen tükröződnek vissza a padlóról. Ezt kiküszöböltük a képelemző program fejlesztésével. Azonban felmerülhet a kérdés, hogy mi van akkor ha esős borús idő van és nincs fényfolt. Ebben az esetben matematikai számítások során kiszámoljuk, hogy az adott napon Egerben másodpercre pontosan mikor van a helyi dél. Mivel a fő célunk a régi hagyomány megőrzése volt, így elsősorban a megfigyelésre szeretnénk hagyatkozni, másodsorban pedig a számításra.
Felmerült egy olyan probléma is ha a kameraképet vagy a fényfoltot takarják ki a látogatók. Ebben az esetben is a számításra tudunk hagyatkozni, vagy esetlegesen a terem felügyelőre aki rendre utasítja a látogatókat.
<br>
A rendszer az időpontokat egy adatbázisban rögzíti, valamint azt is, hogy ez az időpont megfigyelés vagy számítás során állt elő. Ezzel az adatbázissal a későbbiekben különféle statisztikákat készíthetünk, melyek későbbi kutatások segítségére lehetnek.
<br>
Ezt az eszközt a második csoportba sorolhatjuk, hiszen vezérelni nem tudjuk, azonban automatikus vezérlési fejlesztésen esett át.
</div>


</div>
		
		</td>

	</tr>
	
	

</table>
                
                
                

	<div style="margin: 0 auto; text-align: center;" class="center">
		<h3><br>A következő gomb megnyomásával tesztelheted tudásod és pontokat is szerezhetsz!</h3>
		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
	    	Kvíz megnyitása
		</button>
	</div>


 

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>

                </button>             
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div id="page-wrap">
 
 <h1>Kvíz</h1>

 <form class="solid" action="result" method="post" id="quiz">
 
            <ol>
            
                <li>
                
                    <h3>Mit jelölt ki Hell Miksa az egri Líceum egyik termének padlóján?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" checked="checked"/>
                        <label for="question-1-answers-A">A) A meridián vonalat </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Az ott áthaladó kelet-nyugati tájolású meridián vonalat</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Az ott áthaladó észak-déli tájolású meridián vonalat</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Csillagászati delet</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Mit tudtak ezzel meghatározni?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" checked="checked"/>
                        <label for="question-2-answers-A">A) A dél pontos időpontját Egerben</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) A csillagászati dél pontos időpontját</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Észak-déli tájolású meridián vonalat</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) A csillagászati dél pontos időpontját Egerben</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Mikor van a helyi dél időpontja?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" checked="checked"/>
                        <label for="question-3-answers-A">A) Amikor a fény a meridián vonalra vetül</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Amikor a nap sugarai beszűrődnek</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Amikor egy kis fényfolt jelenik meg a terem padlóján</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) A fenti állítások közül egyik sem</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Miért feszítenek ki egy zsineget a vonal fölé?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" checked="checked"/>
                        <label for="question-4-answers-A">A) Mert a vonalon jelölve van a fényfolt éves mozgásának 2 végpontja</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Így pontosabban tudták meghatározni a delelés időpontját</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Mert a zsineg a nyári és a téli napfordulóknak felel meg</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Mert a helyi déli időszámítás a zsineg körül ingadozik az évszaknak megfelelően, amit téli időszámítás szerint értünk</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Hol szólalt meg először a kis harang?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" checked="checked"/>
                        <label for="question-5-answers-A">A) A rádiókban</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Egerben</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Helyi templomokban</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Csillagvizsgálóban</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Mi rendszerünk egyik fő alkotóeleme?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" checked="checked"/>
                        <label for="question-6-answers-A">A) Kis számítógép</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) Arduino UNO</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) Raspberry Pi</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D) Egy mikrokontroller</label>
                    </div>
                
                </li>
                <li>
                
                    <h3>Melyik három fő pontot határozunk meg a meridián vonalon?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" checked="checked"/>
                        <label for="question-7-answers-A">A) Téli napforduló, zsineg, harang</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                        <label for="question-7-answers-B">B) Nyári napforduló, téli napforduló, törésvonal</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                        <label for="question-7-answers-C">C) Nyári napforduló, töréspont, zsineg</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
                        <label for="question-7-answers-D">D) Nyári napforduló, téli napforduló, töréspont</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Beküld" class="submitbtn button" />
 	
 </form>
                
                
                
            </div>  

        </div>

    </div>
</div>

 
 </div>
</table>



