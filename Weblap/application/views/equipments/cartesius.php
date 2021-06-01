



<?php 

						
				
?>

<script type="text/javascript">
  
</script>

<style type="text/css">
  body {
  background: #000;

}
/*body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}*/
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



<style type="text/css">
.style1 {
  text-align: left;
}


#equipmentcontainer{
  margin: 0 auto;
  text-align: center;

}

</style>



<table style="width: 95%;margin: 0 auto;" >
  <tr >
    <td colspan="2">
    <h1 id="equipmenttitle" class="shimmer">Cartesius-búvár működési elve</h1>
  </td>
    <td>
    </td>

  </tr>
	<tr>
		
		<!--<h4>Működési elv: </h4>-->
		<br>
    <td>
<div style="text-align: center;width:95%; " align="justify">
<img id="equipmentsimg"  hspace="6" vspace="6" alt="cartesius.jpeg" align="left" src="<?php echo base_url()?>/assets/images/newcartesius.jpg"  >
</td>
<td>

<div id="equipmentdescription" class="fade-in" align="justify">
  <img id="bottlecartesius"  hspace="6" vspace="6" align="right" src="<?php echo base_url()?>/assets/images/bottlecartesius.gif">
  
	A Cartesius-búvár megtalálható jelenleg is a Varázstoronyban, azonban az még manuálisan működtethető ezért ezt az eszközt a második kategóriába sorolhatjuk. Ennél az eszköznél magas volt a meghibásodás esélye, hiszen akaratlanul is elhasználódnak az alkatrészek a látogatók kísérletezése közben.
			<br>
			Ez az eszköz a folyadékok átlagsűrűségét mutatja be. A légnyomás változásának hatására egy zárt rendszerben megváltozik a búvárok átlagsűrűsége. Ha ez az átlagsűrűség nagyobb, mint a víz átlagsűrűsége, akkor a búvárok lesüllyednek, ha viszont kisebb akkor fellebegnek a víz tetejére. Hasonló elven működnek például a tengeralattjárók is.
			<br>
			Szerettünk volna létrehozni egy olyan új Cartesius-búvárt, mely jóval strapabítóbb és már ezt is a felületről tudjuk vezérelni.
			<br>
			Az új Cartesius-búvár 3 plexi csőből áll, melyben 1-1-1 búvár lebeg alap helyzetben, különböző súlyokkal. Ez a búvár mindazon túl, hogy ellátja eddigi feladatát, a nyomásszenzornak köszönhetően már mérőkísérletként is használható.
      <br>
      <br>
      <h3 align="center">Használat:</h3>
      <p align="center" class="lead">Az alábbi lehetőségek közül választva befolyásolhatod a Cartesius-búvár működését. </p>
</div>

			

</div>
<div >
<?php

require_once('mqtt.php');  
        if(isset($_POST['button0'])) {
            
          Publish("Cartesius/demo",'0');
			
        	}

        if(isset($_POST['button1'])) {
            
          Publish("Cartesius/demo",'1');
      
          }
        if(isset($_POST['button2'])) {
            
          Publish("Cartesius/demo",'2');
      
          }
        if(isset($_POST['button3'])) {
            
          Publish("Cartesius/demo",'3');
      
          }
        if(isset($_POST['button4'])) {
            
          Publish("Cartesius/demo",'4');
      
          }
          if(isset($_POST['button5'])) {
            
          Publish("Cartesius/demo",'5');
      
          }
          if(isset($_POST['button6'])) {
            
          Publish("Cartesius/demo",'6');
      
          }
       
    ?>
  <br>
 
  </div>

		
		</td>

		</tr>
	
	

</table>

<table id="counter" style="margin: 0 auto;">
  <tr>
    <td  align="center" >


       
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
</table>
<form   id='cartesiusform' method='post'  >
<table id="formtable"  class="table table-hover"  align="center" >
  

  <tr>
  <td>
        <p id="equipmentbuttondesc">Egyedi mérés<br></p>
     </td>
	 <td>
         <input id="equipmentbutton" type="submit" class="btn btn-primary" name="button0"
                  value="Indítás"/>
      </td>
	  </tr>

   	<tr>
   		<td>
        <p id="equipmentbuttondesc">A három búvár egyszerre lemerül, majd egyszerre jönnek fel.</p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-secondary" name="button1"
                  value="Indítás"/>
      	</td>
     </tr>
    
    <tr>
    	<td>
        <p id="equipmentbuttondesc">A három búvár egyesével lemerül, és egyszerre jönnek fel.</p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-success" name="button2"
                  value="Indítás"/>
     	</td>
     </tr>

     <tr>
     	<td>
    
        <p id="equipmentbuttondesc">A három búvár egyesével lemerül, majd külön külön jönnek fel.</p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-info" name="button3"
                  value="Indítás"/>
     	</td>
     </tr>

     <tr>
     	<td>
    
        <p id="equipmentbuttondesc">A baloldali búvár lemerül, majd feljön.<br></p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-warning" name="button4"
                  value="Indítás"/>
     	</td>
     </tr>
     <tr>
     	<td>
    
        <p id="equipmentbuttondesc">A középső búvár lemerül,majd feljön.<br></p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-danger" name="button5"
                  value="Indítás"/>
      	</td>
      </tr>
      <tr>
      	<td>
    
        <p id="equipmentbuttondesc">A jobboldali búvár lemerül, majd feljön.</p>
      	</td>
      	<td>
         <input id="equipmentbutton" type="submit" class="btn btn-success" name="button6"
                  value="Indítás"/>
		</td>
	</tr>


      

      


        
    
     

    
</table>
  </form>
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
		changevisibility("cartesiusform",false);
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
         
         fetch('<?php echo base_url()?>equipments/functions/getwaitercartesius/cartesius')
  		.then(response => response.text())
  		.then((data) => {
    	waiters=data;
  		});
        
         //var waiters=document.getElementById("waiters").innerHTML; 
        
         try{
            waiters = jQuery.parseJSON(waiters);
            var currentuser= "<?php echo $_SESSION['username']; ?>";
            var firstwaiter=waiters[0]['username'];
            var serialnumber=functiontofindIndexByKeyValue(waiters, 'username', currentuser);

         if(firstwaiter==currentuser){
            document.getElementById("waitermessage").innerHTML ="Te jössz!";
            changevisibility("cartesiusform",true);
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
            changevisibility("cartesiusform",false);
            document.getElementById("waitermessage").innerHTML = serialnumber+". várakozó vagy!<br><h4>Körülbelül ennyit kell várnod:<br>"+serialnumber+" perc</h4>";
           
          }
         }
         catch (e){
          
         }
        
          
         

         //console.log(firstwaiter);
         

         

         


        //var a=document.getElementById("waitermessage").innerHTML;
        //var currentValue = parseInt($("#waitermessage").text(),10);
        //currentValue=currentValue+1;
        //document.getElementById("waitermessage").innerHTML = currentValue;
    }

    
    



      
      
    </script>

      

    <script >


    	var formHasChanged = false;



		  $("form").submit(function(){
 		   formHasChanged=true;
 		
 	  	 });

		/*window.addEventListener('beforeunload', (event) => {
			if(!window.formHasChanged){

				
  		// Cancel the event as stated by the standard.
 		   event.preventDefault();
  		// Chrome requires returnValue to be set.
  		event.returnValue = '';
  		window.removeEventListener('beforeunload',handler);
   		delete event['returnValue'];
   	}
		});*/
		
		
		
		/*window.addEventListener('beforeunload',  function ez (e) {
			if(!window.formHasChanged){

				
			// Cancel the event
  		e.preventDefault(); // If you prevent default behavior in Mozilla Firefox prompt will always be shown
  		// Chrome requires returnValue to be set
  			e.returnValue = '';
  			
   	
			} 
  		
  		
  		
  		
		});*/


var myclose = false;

function ConfirmClose()
{
    if (event.clientY < 0)
    {
        event.returnValue = 'You have closed the browser. Do you want to logout from your application?';
        setTimeout('myclose=false',10);
        myclose=true;
    }
}

function HandleOnClose()
{
    if (myclose==true) 
    {
        //the url of your logout page which invalidate session on logout 
        location.replace('/contextpath/j_spring_security_logout') ;
    }   
}
    
		
	

</script>
    


<!--Ezt ne töröld ki!! Adat rögzítéséhez kell -->
<div style="visibility: hidden;" >
  <p id="waiters"></p>
  <p id="hearthbeat">gfhgf</p>
</div>


<!-- ------------------------------------------ -->

