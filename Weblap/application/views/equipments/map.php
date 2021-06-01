<style>
body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}
.shimmer {
  font-family: "Lato";
  font-weight: 300;
  font-size: 3em;
  margin: 0 auto;
  
  display: inline;
  margin-bottom: 0;
}
p {
  font-family: "Lato";
  font-weight: 300;
  font-size: 1em;
  color: rgba(255,255,255,0.65);
  width: 500px;
  text-align: justify;
  line-height: 1.5em;
  border-top: 1px dashed rgba(255,255,255,0.2);
  margin: 10px 0 0 5px;
  padding-top: 10px;
}
p a {
  text-decoration: none;
  color: #fff;
}
p a:visted {
  color: #fff;
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
<!--Pictures width: 611 px-->

<div class="container">
	<div class="gallery">

		<table class="maptable"  align="center">
			<tr>
				<td id="titletd" class="shimmer">
					A varázstorony sematikus rajza
				</td>
			</tr>
			<tr>
				<td >
					Interaktív fogadó terem (4. szint/3. emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map" class="relative-pos">
    				<img class="mappicture"  src="https://varazstorony.robucation.com/assets/images/terkepek/elso/terkep.png" alt="Planets" usemap="#map">
					</div>
    
					<map name="map">
						<area shape="rect" link="false" coords="530,480" alt="Sun" data-name="Bejárat" data-type="primary"href="<?php echo base_url()?>assets/images/terkepek/elso/holegballon.jpg">

    				<area shape="rect" link="true" coords="80,520" alt="Sun" data-name="Hőlégballon" data-type="warning"href="<?php echo base_url()?>assets/images/terkepek/elso/holegballon.jpg">

    				 <area shape="rect" link="true" coords="190,520" alt="Sun" data-name="Kőzet,ásvány<br>kiállítás" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/elso/kozetek2.jpg" >

    				 <area shape="rect" link="true" coords="320,520" alt="Sun" data-name="Kőzet,ásvány<br>kiállítás" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/elso/kozetek1.jpg" >

    				 <area shape="rect" link="true" coords="40,590" alt="Sun" data-name="Hang<br>rezonátor" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/elso/hangrezonator.jpg" >
    				<area shape="rect" link="true" coords="130,580" alt="Sun" data-name="<small>Certesius búvár I</small>" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/elso/cartesiusbuvar.jpg" >

    				<area shape="rect" link="true" coords="128,610" alt="Sun" data-name="<small>Certesius búvár II</small>" data-type="info" href="<?php echo base_url()?>equipments/cartesius" >

    				<area shape="rect" link="true" coords="255,590" alt="Sun" data-name="Bermuda<br>henger" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/elso/bermuda.jpg" >

    				<area shape="rect" link="true" coords="350,590" alt="Sun" data-name="Hajóátemelő<br>zsilip" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/elso/hajoatemelo.jpg" >

    				<area shape="rect" link="false" coords="470,590" alt="Sun" data-name="Információs<br>pult" data-type="danger"  >
    				
					</map>
				</td>
			</tr>
			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Félszint (Inga súly)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map1" class="relative-pos">
    				<img class="mappicture"  src="https://varazstorony.robucation.com/assets/images/terkepek/masodik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map1">
						<area shape="rect" link="true" coords="360,520" alt="Sun" data-name="Foucault-féle<br>inga" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/masodik/inga.jpg" >
					</map>
				</td>
			</tr>
			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Barna György optikatörténeti kiállítás <br> (6. szint/5. emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map2" class="relative-pos">
    				<img class="mappicture"  src="https://varazstorony.robucation.com/assets/images/terkepek/harmadik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map2">
						<area shape="rect" link="false" coords="140,200" alt="Sun" data-name="<h4>Optikatörténeti</br>kiállítás<br>(Idegenvezetővel megtekinthető)</h4>" data-type="danger"  >
					</map>
				</td>
			</tr>
			

			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Planetárium/Varázsterem (7. szint/6.emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map3" class="relative-pos">
    				<img class="mappicture"  src="https://varazstorony.robucation.com/assets/images/terkepek/negyedik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map3">
						<area shape="rect" link="false" coords="235,90" alt="Sun" data-name="Nagyfeszültségű</br>sarok" data-type="warning"  >

						<area shape="rect" link="false" coords="225,140" alt="Sun" data-name="Apollo 11" data-type="danger"  >

						<area shape="rect" link="false" coords="360,140" alt="Sun" data-name="Fénysarok" data-type="danger"  >

						<area shape="rect" link="false" coords="480,140" alt="Sun" data-name="Múzeális<br>műszerek" data-type="danger"  >

						<area shape="rect" link="false" coords="360,260" alt="Sun" data-name="Kísérletek" data-type="warning"  >

						<area shape="rect" link="false" coords="460,230" alt="Sun" data-name="Optikai<br>sarok" data-type="warning"  >

						<area shape="rect" link="false" coords="130,260" alt="Sun" data-name="Planetárium</br>(időszakos megtekintés)<br>" data-type="danger"  >

						<area shape="rect" link="false" coords="480,320" alt="Sun" data-name="Múzeális<br>műszerek" data-type="danger"  >

						<area shape="rect" link="false" coords="360,340" alt="Sun" data-name="Levegőágyú" data-type="danger"  >

						<area shape="rect" link="false" coords="235,370" alt="Sun" data-name="<h4>Varázsterem</h4>" data-type="secondary"  >

						<area shape="rect" link="true" coords="200,660" alt="Sun" data-name="Kis Dollond<br>távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/kisdollondtavcs.jpg" >

						<area shape="rect" link="false" coords="320,660" alt="Sun" data-name="<h4>Hell Miksa<br>csillagászati múzeum</h4>" data-type="secondary"  >

						<area shape="rect" link="false" coords="330,750" alt="Sun" data-name="Meridián<br>vonal" data-type="danger"  >

						
						<area shape="rect" link="true" coords="80,810" alt="Sun" data-name="Hadley-Newton<br>trükkös távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/hadleynewtontrukkos.jpg" >

						<area shape="rect" link="true" coords="250,790" alt="Sun" data-name="Hadley-Newton<br>távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/hadleynewtontavcso.jpg" >

						<area shape="rect" link="true" coords="25,890" alt="Sun" data-name="Kvadráns" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/kvadrans.jpg" >

						<area shape="rect" link="true" coords="210,830" alt="Sun" data-name="Gregory féle<br>trükkös távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/gregorytrukkos.jpg" >

						<area shape="rect" link="true" coords="420,800" alt="Sun" data-name="Angol szerelésű<br>parallaktikus<br>távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/angolszerelesuparallaktikus.jpg" >

						<area shape="rect" link="true" coords="110,890" alt="Sun" data-name="<small>Mezőnyárádi<br>ágyús<br>napóra<small>" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/mezonyaradiagyus.jpg" >

						<area shape="rect" link="true" coords="190,890" alt="Sun" data-name="<small>Akromatikus<br>dolland<br>távcső<small>" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/akromantikusdolland.jpg" >

						<area shape="rect" link="true" coords="265,930" alt="Sun" data-name="Dollond<br>távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/dollondtavcso.jpg" >

						<area shape="rect" link="true" coords="330,900" alt="Sun" data-name="<small>Csillagászati<br>óra</small>" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/csillagaszatiora.jpg" >

						<area shape="rect" link="true" coords="440,900" alt="Sun" data-name="<small>Nagy, fali<br>kvadráns</small>" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/negyedik/nagyfalikvadrans.jpg" >

						

					</map>
				</td>
			</tr>

			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Csillagász melegedője<br>(félszint 7.szint/6. emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map4" class="relative-pos">
    				<img class="mappicture"  src="http://varazstorony.robucation.com/assets/images/terkepek/otodik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map4">
						<area shape="rect" link="true" coords="80,500" alt="Sun" data-name="A csillagász<br>melegedője<br>(idegenvezetővel<br>megtekinthető)" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/otodik/csillagaszmelegedoje.jpg" >
					</map>
				</td>
			</tr>

			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Panoráma terasz (9.szint/8.emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map5" class="relative-pos">
    				<img class="mappicture"  src="http://varazstorony.robucation.com/assets/images/terkepek/hatodik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map5">
						<area shape="rect" link="true" coords="120,60" alt="Sun" data-name="<h4>Távcső</h4>" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/hatodik/hatter1.jpg" >

						<area shape="rect" link="true" coords="400,990" alt="Sun" data-name="<h4>Távcső</h4>" data-type="warning" href="<?php echo base_url()?>assets/images/terkepek/hatodik/hatter2.jpg" >
					</map>
				</td>
			</tr>

			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Camera obscura (10. szint/9. emelet)
				</td>
			</tr>
			<tr>
				<td>
					<div id="map6" class="relative-pos">
    				<img class="mappicture"  src="http://varazstorony.robucation.com/assets/images/terkepek/hetedik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map6">
						<area shape="rect" link="true" coords="80,500" alt="Sun" data-name="Camera Obscura<br>(időszakosan<br>megtekinthető)" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/hetedik/cameraobcrura.jpg" >

						<area shape="rect" link="false" coords="420,500" alt="Sun" data-name="Inga<br>felfüggesztési<br>pontja" data-type="danger"  >
					</map>
				</td>
			</tr>

			<tr>
				<td height="100px"></td>
			</tr>
			<tr>
				<td>
					Csillagvizsgáló
				</td>
			</tr>
			<tr>
				<td>
					<div id="map7" class="relative-pos">
    				<img class="mappicture"  src="http://varazstorony.robucation.com/assets/images/terkepek/nyolcadik/terkep.png" alt="Planets" usemap="#map">
					</div>

					<map name="map7">

						<area shape="rect" link="false" coords="270,520" alt="Sun" data-name="Passage<br>távcső" data-type="danger"  >

						<area shape="rect" link="true" coords="420,520" alt="Sun" data-name="Ekvatorális<br>távcső" data-type="danger" href="<?php echo base_url()?>assets/images/terkepek/nyolcadik/ekvantorialis.jpg" >

						
					</map>
				</td>
			</tr>

			<tr>
				<td height="150px"></td>
			</tr>


		</table>
		
		
	</div>
	<h3 class="shimmer"> További képekért látogasson el a <a href="<?php echo base_url()?>gallery">galéria</a> menüpontra</h3>
</div>


