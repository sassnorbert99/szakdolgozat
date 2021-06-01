<style type="text/css">
    .container{
    margin: 0 auto;
    position:center;
}

.centere {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
body{
  background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");

}

.container .gallery a img {
  float: center;
  width: 20%;
  height: auto;
  border: 2px solid #fff;
  -webkit-transition: -webkit-transform .15s ease;
  -moz-transition: -moz-transform .15s ease;
  -o-transition: -o-transform .15s ease;
  -ms-transition: -ms-transform .15s ease;
  transition: transform .15s ease;
  position: relative;

}

.container .gallery a:hover img {
  -webkit-transform: scale(1.05);
  -moz-transform: scale(1.05);
  -o-transform: scale(1.05);
  -ms-transform: scale(1.05);
  transform: scale(1.05);
  z-index: 5;

}

.clear {
  clear: both;
  float: none;
  width: 100%;
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




        <div class='container'>
          <h1 class="shimmer">Galéria:</h1>
            <div class="gallery">
              
            <?php 
            $image_extensions = array("png","jpg","jpeg","gif");

            $dir = './assets/images/terkepek/gallery';
            if (is_dir($dir)){
                
                if ($dh = opendir($dir)){
                    $count = 1;

                    while (($file = readdir($dh)) !== false){

                        if($file != '' && $file != '.' && $file != '..'){
                            
                            $thumbnail_path = "../assets/images/terkepek/gallery/".$file;

                            $image_path = "../assets/images/terkepek/gallery/".$file;
                            
                            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
                            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

                            if(!is_dir($image_path) && 
                                in_array($thumbnail_ext,$image_extensions) && 
                                in_array($image_ext,$image_extensions)){
                                ?>
                                <a href="<?php echo $image_path; ?>">
                                    <img src="<?php echo $thumbnail_path; ?>" alt="" title=""/>
                                </a>
                                <?php
                                if( $count%4 == 0){
                                ?>
                                    <div class="clear"></div>
                                <?php    
                                }
                                $count++;
                            }
                        }
                            
                    }
                    closedir($dh);
                }
            }
            ?>
            </div>
            

            
            <h1 class="shimmer">A videó megtekintéséhez katt ide:</h1>
            <div class="centere">              
              <iframe frameborder="0" width="420" height="345" src="//www.youtube.com/embed/DwXELNidJ7k"></iframe>                                          
          </div>
          
        </div>


        <!-- Script -->
        <script type='text/javascript'>
        $(document).ready(function(){

            // Intialize gallery
            var gallery = $('.gallery a').simpleLightbox();
        });
        </script>


