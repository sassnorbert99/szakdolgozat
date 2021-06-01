<style type="text/css">
	.centere {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
body {
 background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
 background-color: #cccccc;
}
</style>

<?php echo form_open('users/login'); ?>
	
	<div class="container" style="width: 90%">
		
		<div class="vertical-align" >
			<img src="<?php echo base_url()?>/assets/images/eke.png" alt="EKE" class="centere">
			<h1 class="text-center"><p id="login">Bejelentkezés</p></h1>
			<div class="form-group" >
				<input id="logindesc" style="text-align: center;" type="text" name="username" class="form-control" placeholder="Felhasználónév" required autofocus>
			</div>
			<div class="form-group">
				<input id="logindesc" style="text-align: center;" type="password" name="password" class="form-control" placeholder="Jelszó" required autofocus>
			</div>
			<button id="logindesc" type="submit" class="btn btn-primary btn-block">Bejelentkezés</button>
	
		</div>

	</div>
<?php echo form_close(); ?>