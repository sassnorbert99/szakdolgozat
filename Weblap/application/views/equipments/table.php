
<?php /*
$statement="SELECT username,currentpage,visitdate FROM users WHERE currentpage='".$title."'";
var_dump($statement);
        
        $conn = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony") or die("Connection Error: " . mysqli_error($conn));
        $result=mysqli_query($conn,$statement );
        $insert_id = mysqli_insert_id($conn);
        var_dump($result);

        while( $row = mysqli_fetch_assoc( $result)){
            $rows[] = $row; // Inside while loop
}
        var_dump($this->session->all_userdata());

*/

?>
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
    <h1 id="equipmenttitle" class="shimmer">Terepasztal működési elve</h1>
  </td>
    <td>
    </td>

  </tr>
  <tr>
    
    <!--<h4>Működési elv: </h4>-->
    <br>
    <td>
<div style="text-align: center;width:95%; " align="justify">
<img id="equipmentsimg" alt="table.png" align="left" src="<?php echo base_url()?>/assets/images/table.png"  >
</td>
<td>
<div id="equipmentdescription" class="fade-in" align="justify">
 Napjainkban szinte természetesnek vesszük, hogy ha felkapcsoljuk a lámpát, akkor fény van, ha felrakjuk a telefont tölteni, akkor feltöltődik. A kettő között annyi az azonos, hogy áram kell, hogy ezeket meg tudjuk valósítani, áramot pedig termelőktől, energiaforrásoktól kapunk. Ilyen termelők például az atomerőművek, hőerőmű, szénerőmű, olajerőmű, szeméterőmű, illetve a napenergia, szélerőmű és a vízerőmű. Azonban energia termelés során ökológiai lábnyomot hagyunk magunk után, hiszen ezek közül számos olyan erőmű létezik, mely nem megújuló energiaforrás, a környezetre káros hatással vannak. Vannak azonban környezetbarát, megújuló energiaforrások, melyek használatával csökkenthetjük a magunk után hagyott ökológiai lábnyomot.
<br>
Megújuló energiaforrásnak nevezzük az energiahordozók azon csoportját, amelyek
emberi idő léptékben képesek megújulni, azaz nem fogynak el, ellentétben a nem megújuló
energiaforrásokkal. A mai civilizáció a zöld energiát helyezi előtérbe, és arra törekszik, hogy
minél kisebbre csökkentse az ökológiai lábnyomot.
<br>
<br>
<h4 align="center">Használat:</h4>
<p align="center">A lenyíló menüből választhatsz egy országot, és választhatsz egy tetszőleges dátumot. Egy mikrokontroller ezeket az adatokat feldolgozza és képes szimulálni a földrajzi elhelyezkedést, és a Nap járását.</p>
</div>

      

</div>


    
    </td>

    </tr>
  
  

</table>
<br>
<table style="width: 80%; text-align: center; margin: 0 auto;">
  <tr>

    <td align="center">
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/assets/suncalc/suncalcclient.php');
$longitude;
$latitude;


require_once('mqtt.php');  
        if(isset($_POST['button'])) {
          if($_POST['date']==""){
              
              

              
          }
          else{
            
            $countrydata=$_POST["countries"];
              $tmp=explode(";", $countrydata);
              $long=$tmp[0];
              $lati=$tmp[1];
            
            $informations=Solardata($_POST['date'],$long,$lati);
            
            Publish("table",$informations["sunriseStr"].";".$informations["morningazimuth"].";".$informations["morningaltitude"].";".$informations["sunriseEnd"].";".$informations["eveningazimuth"].";".$informations["eveningaltitude"].";".$informations["solarNoon"].";".$informations["azimuthnoon"].";".$informations["altitudenoon"]);
          }
          
      
          }
        
    ?>

  <div  style="margin: 0 auto;">
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
  <br>
</td>
</tr>
<tr>
  <td>
<form id="cartesiusform" method="post" >
     
       
            <select id="countries"  class="btn btn-outline-warning" name="countries" >
            <option value="47;19">Magyarország</option>
            <option value="51;0">London</option>
            <option value="48.12;16.22">Bécs</option>
            
            
        </select>
        <br>
        <input  id="equipmentbutton" style="margin: 10px; width: 300px;" type="date" class="btn btn-outline-warning" name="date"
              placeholder="dd/mm/yyyy" pattern="(^(((0[1-9]|1[0-9]|2[0-8])[\/](0[1-9]|1[012]))|((29|30|31)[\/](0[13578]|1[02]))|((29|30)[\/](0[4,6,9]|11)))[\/](19|[2-9][0-9])\d\d$)|(^29[\/]02[\/](19|[2-9][0-9])(00|04|08|12|16|20|24|28|32|36|40|44|48|52|56|60|64|68|72|76|80|84|88|92|96)$)" required />
        <br>
        <input id="equipmentbutton" type="submit"  class="btn btn-success" name="button"
                value="Indítás"/>
       
    </form>
  </td>
</tr>
<tr>
  <td>
    <br>
    <h2 class="h2">Adatok</h2>

<table class="table table-hover" style="width: 80%; margin: 0 auto;">
  <tbody>
    <?php if($energydatas!=null): ?>
      <tr class="table-secondary">
      <th scope="row">Napfelkelte</th>
      <td><?php echo $energydatas[0]['napfelkelte'];?> </td>
     
    </tr>

    <tr class="table-secondary">
      <th scope="row">Naplemente</th>
      <td><?php echo $energydatas[0]['naplemente'];?> </td>
     
    </tr>
    <tr class="table-secondary">
      <th scope="row">Termelt energia</th>
      <td><?php echo $energydatas[0]['termeltenergia'];?> kW</td>
     
    </tr>

    <tr class="table-secondary">
      <th scope="row">Energiaigény:</th>
      <td><?php echo $energydatas[0]['energiaigeny'];?> kW</td>
     
    </tr>
    <?php else:?>
      <tr class="table-secondary">
      <th scope="row">Nincs megjeleníthető adat!</th>
     
     
    </tr>
    <?php endif;?>
  </tbody>
</table>
    
    
  </td>
  </tr>

</table>
    
    

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
         
         fetch('<?php echo base_url()?>equipments/functions/getwaitercartesius/table')
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
        
        catch(e)
        {

        }


        //var a=document.getElementById("waitermessage").innerHTML;
        //var currentValue = parseInt($("#waitermessage").text(),10);
        //currentValue=currentValue+1;
        //document.getElementById("waitermessage").innerHTML = currentValue;
        
    }

    
    



      
      
    </script>

<!--Ezt ne töröld ki!! Adat rögzítéséhez kell -->
<div style="visibility: hidden;" >
  <p id="waiters"></p>
  <p id="hearthbeat">gfhgf</p>
</div>


<!-- ------------------------------------------ -->