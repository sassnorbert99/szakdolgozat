<script>
  changevisibility("robiform",false);
</script>

<style type="text/css">
	body {
  background: #000;
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
</style>
<h1 class="shimmer">Robi a robot működési elve</h1>
<table style="width: 100%;margin: 0 auto;" align="center">
	<tr>
		
		<!--<h4>Működési elv: </h4>-->
		<br>
<div style=" width:95%; ">
<img id="equipmentsimg" alt="robi.png" align="left" src="<?php echo base_url()?>/assets/images/robi.png"  >
<div  >
	Robit a kis játékos robotot a harmadik kategóriába sorolhatjuk, amely interaktív, vezérelhető, azonban új eszközként jelenik meg a látogatók számára a Varázstoronyban.
			<br>
			Ez az eszköz matematikai fogalmak bemutatására, illetve a nim játék szemléltetésére alkalmas. A játék lényege, hogy egy 23 mezőből álló táblán, a pálya egyik végén Robi áll, a másik végén pedig a látogató. A játék kezdeténél a látogató meghatározza a maximális lépésszámot, melyet egy teljes játék során lépni lehet. Ezután Robi kezdi a lépést, felveszi a zsetonját, amely őt jelképezi a pályán, és lép a látogató szabálya szerint. Ezután a látogatónak engedi át a lépési lehetőséget.
			<br>
			Robi folyamatosan ellenőrzi, hogy a játékos jól lépett-e, azaz betartotta-e a saját szabályát ami a maximális lépés számra vonatkozik, lépett-e egyáltalán a látogató vagy nem-e visszafelé akart lépni.
			<br>
			A játék felváltva így halad, majd az nyer aki utolára tud lépni a szabályok betartásával.
			Mivel Robi ismeri a nyerő stratégiát, így alapvetően ő nyeri mindig a játékot.
			<br>
			Azonban mivel nem szeretné, hogy bárki rosszkedvvel távozzon tőle, rendelkezik egy olyan funkcióval, amelyben felfedi a titkát, és megtanítja a Varázstorony látogatóit, hogyan is kell ezt a játékot úgy játszani, hogy biztosan nyerjenek.
			<br>
			Függetlenül attól, hogy nyert-e a látogató Robinál is pontokat gyűjthetnek melyeket a későbbiekben felhasználhatnak.
			<br>
			<h4 align="center">Használat: </h4><p align="center">Az itt található listából kiválasztható a maximális lépésszám, és az "OK" gombbal tudathatod ezt Robival.</p>
</div>


</div>
		
		</td>

	</tr>

<tr>
  <td align="center">
    <div  >
        <div style="max-width: 20rem; ;"  class="card text-white bg-primary mb-3" >
        <div style="text-align: center;" class="card-header">Várakozási lista</div>
        <div class="card-body">
        <h4 style="text-align: center;" id="nowyouare" class="card-title">Te jelenleg a(z): </h4>
        <h3 style="text-align: center;" id="waitermessage" class="card-text"></h3>
        <h3 style="text-align: center;" id="timetext"></h3>
        <h4 style="text-align: center;" id="timecountdown"></h4> 
    
        </div>
        </div>
        </div>
  </td>

</tr>
  <tr>
    <td align="center">
      <p>Az itt található listából válaszd ki a legmagasabb lépésszámot!</p>
      <select id="numbers"  class="btn btn-outline-warning" name="numbers" >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            
            
        </select>
        <button type="button"  class="btn btn-success" onclick="setmaxstep()">OK</button>
    </td>
    
  </tr>
	<tr>
      <td>
        
        <form id="robiform" method="post" >
        <table style="text-align: center; margin: 0 auto;">
		 <script type="text/javascript">
         		function updateTextInput(val) {
          		document.getElementById('textInput').innerHTML=val; 
        		}
    	</script>
		<td style="text-align: center;">
			
			<h3 id="textInput">1</h3>
			<input style="width: 150px; text-align: center;"  type="range" name="rangeInput" min="1" max="9" value="1" onchange="updateTextInput(this.value);">
			
		</td>
		<td>
			<input id="equipmentbutton" type="submit" class="btn btn-success" name="button0"
                	value="Indítás!"/>
		</td>
  </table>
  </form>
  </td>
	</tr>
	
 

</table>

<?php

require_once('mqtt.php');  
        if(isset($_POST['button0'])) {
            
          Publish("Robipalya/lepes",$_POST['rangeInput']);
          Publish("Robipalya/ok",'1');
      
          }
       
    ?>

<script>
      var calledcountdown=false;

      $(document).ready(function(){
        
          $("#hearthbeat").load("<?php echo base_url()?>equipments/functions/hearthbeat/a");
          
          
        
      }); 

      $(document).ready(function(){
        setInterval(function(){
          $("#hearthbeat").load("<?php echo base_url()?>equipments/functions/hearthbeat/a");
          
          
        },50000);
      });


      
    </script>
  
    <script>
  $(document).ready(function(){
    changevisibility("robiform",false);
  });
    function sleep(ms) {
    var unixtime_ms = new Date().getTime();
    
    
    while(new Date().getTime() < unixtime_ms + ms) {}
    }
      
      
        jQuery(function() {

            // Schedule the reloadNames function to run every 5 seconds.
            // So, the list of names will be updated every 5 seconds.

            setInterval(waiterssystem, 2000);
          
          
            
        });
        
         
       

      function waiterssystem(){
         
         fetch('<?php echo base_url()?>equipments/functions/getwaitercartesius/robi')
      .then(response => response.text())
      .then((data) => {
      waiters=data;
      });
        
        try{
          //var waiters=document.getElementById("waiters").innerHTML; 
         waiters = jQuery.parseJSON(waiters);
         
         var currentuser= "<?php echo $_SESSION['username']; ?>";
         var firstwaiter=waiters[0]['username'];
         var serialnumber=functiontofindIndexByKeyValue(waiters, 'username', currentuser);
         

         
         

         if(firstwaiter==currentuser){
          document.getElementById("waitermessage").innerHTML ="Te jössz!";
          
          changevisibility("nowyouare",false);
           document.getElementById("timetext").innerHTML ="Hátralévő idő:";
           if(calledcountdown==false)
           {
             countdown(60000,"timecountdown");
             calledcountdown=true;
           }
           if(document.getElementById("timecountdown").innerHTML==="Lejárt az idő!"){
            location.reload();
           }

          

         }else{
          changevisibility("nowyouare",true);
          changevisibility("robiform",false);
           document.getElementById("waitermessage").innerHTML = serialnumber+". várakozó vagy!<br><h4>Körülbelül ennyit kell várnod:<br>"+serialnumber+" perc</h4>";
           
         }
        }
        catch(e){

        }
         

         


        //var a=document.getElementById("waitermessage").innerHTML;
        //var currentValue = parseInt($("#waitermessage").text(),10);
        //currentValue=currentValue+1;
        //document.getElementById("waitermessage").innerHTML = currentValue;
    }

    
    



      
      
    </script>
    <script type="text/javascript">
      function setmaxstep(){
      changevisibility("robiform",true);
    }
    </script>

<!--Ezt ne töröld ki!! Adat rögzítéséhez kell -->
<div style="visibility: hidden;" >
  <p id="waiters"></p>
  <p id="hearthbeat">gfhgf</p>
</div>