<style type="text/css">
  #back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
  }
  #back2Top:hover {
    background-color: #DDF;
    color: #000;
  }
</style>

<script type="text/javascript">
  /*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>


		<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/application/views/equipments/functions/wheretheuseris.php');
          wheretheuseris($this,$title); ?>

		

  

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

		
		<!--<script>
			CKEDITOR.replace('editor1');

		</script>-->
		<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <!--<script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>-->
    <!-- Galery -->
    <link href='<?php echo base_url()?>/assets/gallery/simplelightbox-master/dist/simple-lightbox.min.css' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url()?>/assets/gallery/simplelightbox-master/dist/simple-lightbox.jquery.min.js"></script>
        
        <link href='<?php echo base_url()?>/assets/gallery/style.css' rel='stylesheet' type='text/css'>
   
        <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/badget.js"></script>
         <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/functiontofindIndexByKeyValue.js"></script>
      <!--For hiding navbar -->
     
    <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/navigation.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/changevisibility.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/countdown.js"></script>

    
    <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/gallery.js"></script>
      <!-- ------------------ -->
       <script type="text/javascript" src="<?php echo base_url()?>/assets/scripts/userexit.js"></script>
    
      
      
     


	</body>
  <a id="back2Top" title="Back to top" href="#">&#10148;</a>
	
 <!--
style="position: fixed;
  right: 0;
  bottom: 0;
  width: 100%; height: 50px; text-align: center; "
 -->

<div style="height: 100px;"></div>
	<?php if($title=='Map'):?>
    
   


    <div class="jelmagyarazatmegnyitasa" >
  <button class="btn btn-success"  id="showhidebutton" onclick="myFunction()"><h3>Jelmagyarázat</h3></button>


    </div>

    
  
    <nav  id="navigation" class="navbar navbar-expand-lg navbar-dark bg-primary" style="position: fixed;
  
  bottom: 0;
  width: 100%;
  align-self:  center ; ">
  <script > myFunction();</script>
    
  <button class="navbar-toggler" id="jelmagyarazatgomb" type="button" data-toggle="collapse" style="float: right;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">Jelmagyarázat</button>

    
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <table align="center">
      <tr >
        <td  >
          <div style="width: 100%; text-align: center; ">

          <button class="btn btn-danger"  id="showhidebutton" onclick="myFunction()"><h3>Jelmagyarázat bezárása</h3></button>
        </div>
        </td>
      </tr>
      <tr>
        <td>
          <table  class="table table-hover" style="font-size: 14px;" >


            <th>
              <td><h2><p class="colors">Színek</p></h2></td>
              <td></td>
            </th>
            <tr>
              <td><h3><p id="colorbadge" class="badge badge-pill badge-danger">Megtekinthető</p></h3></td>
              <td><h3><p id="colordescription">Megtekinthető tartalom.</p></h3></td>
            </tr>
            <tr>
              <td><h3><p id="colorbadge" class="badge badge-pill badge-warning">Interaktív</p></h3></td>
              <td><h3><p id="colordescription">Vezérelhető interaktív tartalom.</p></h3></td>
            </tr>
            <tr>
              <td><h3><p id="colorbadge" class="badge badge-pill badge-info">Vezérelhető</p></h3></td>
              <td><h3><p id="colordescription">Okoseszközzel vezérelhető tartalom.</p></h3></td>
            </tr>
            
          </table>
        </td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td></td>
      </tr>
     
    </table>
  </div>
</nav>

	<?php endif ?>
	
</html>

