<style type="text/css">
body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}
</style>

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>

<div class="container" style="width: 80%">
	<div  >
		<div   style="text-align:center;">
			<h1 id="registertitle" class="text-center">Regisztrálás</h1>
	<div class="form-group" >
		<label id="registerlabel">Irányítószám</label>
		<input id="registerinput" type="text" style="text-align: center;" class="form-control" name="zipcode" placeholder="Irányítószám">
	</div>
	<div class="form-group">
		<label id="registerlabel">Teljes név</label>
		<input id="registerinput" type="text" style="text-align: center;" class="form-control" name="name" placeholder="Teljes név">
	</div><div class="form-group">
		<label id="registerlabel">Email cím</label>
		<input id="registerinput" type="email" style="text-align: center;" class="form-control" name="email" placeholder="Email cím">
	</div><div class="form-group">
		<label id="registerlabel">Felhasználó név</label>
		<input id="registerinput" type="text" style="text-align: center;" class="form-control" name="username" placeholder="Felhasználói név">
	</div><div class="form-group">
		<label id="registerlabel">Jelszó</label>
		<input id="registerinput" type="password" style="text-align: center;" class="form-control" name="password" placeholder="Jelszó">
	</div>
	<div class="form-group">
		<label id="registerlabel">Jelszó megerősítése</label>
		<input id="registerinput" type="password" style="text-align: center;" class="form-control" name="password2" placeholder="Jelszó megerősítése">
	</div>
	<div class="form-group">
		 <br>
		<h3>Szeretnénk, ha néhány adattal segítenéd munkánk.</h3>
		<br>
		<label id="registerlabel">Melyek tartoznak az érdeklődési körödbe? (Válassz egyet, vagy többet.)</label>
		<br>
		 <input id="interestcheckbox" type="checkbox"  name="interest1" >
  		<label id="interestoption" for="interest1">  Informatika</label><br>
  		<input id="interestcheckbox" type="checkbox"  name="interest2" >
  		<label id="interestoption" for="interest2"> Egyéb műszaki tudományok</label><br>
  		<input id="interestcheckbox" type="checkbox" id="interestcheckbox" name="interest3" >
  		<label id="interestoption" for="interest3"> Természettudományok</label><br>
  		<input type="checkbox" id="interestcheckbox" name="interest4" >
  		<label id="interestoption" for="interest4"> Művészetek</label><br>
  		<input type="checkbox" id="interestcheckbox" name="interest5" >
  		<label id="interestoption" for="interest5"> Bölcsészettudományok</label><br>
  		<input type="checkbox" id="interestcheckbox" name="interest6" >
  		<label id="interestoption" for="interest6"> Egyéb</label> <input type="text" id="interestothertext" name="other"  > <br>

	</div>
	<div class="form-group">
		<label id="registerlabel">Kérjük add meg az életkorodat!</label>
		<br>
		<input style="width: 50%;" type="range" onchange="updateTextInput(this.value);" id="age" name="age" value="10" 
         min="10" max="99">
          <script type="text/javascript">
         		function updateTextInput(val) {
          		document.getElementById('textInput').innerHTML=val; 
        		}
    	</script>
  <h3 id="textInput">10</h3>
	</div>
	<div class="form-group">
		<label id="registerlabel">Kérjük add meg a nemed!</label>
		<br>
		<input type="radio" id="interestcheckbox" name="gender" value="male">
  		<label id="interestoption" for="male">Férfi</label><br>
  		<input  type="radio" id="interestcheckbox" name="gender" value="female">
  		<label id="interestoption" for="female">Nő</label><br>
  		<input type="radio" id="interestcheckbox" name="gender" value="other">
  		<label id="interestoption" for="other">Egyéb</label>
	</div>

	<button  type="submit" class="btn btn-primary btn-block"><h4 id="registerbutton">Regisztrálás</h4></button>
	</div>
	</div>
</div>
<?php echo form_close(); ?>