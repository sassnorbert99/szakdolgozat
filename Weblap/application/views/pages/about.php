<style >
.fa {
  padding: 10px;
  font-size: 40px;
  height: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
}
/**/
/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}
.form-container {
    /*background: #f1ecdf;*/
    border: #e2ddd2 1px solid;
    padding: 20px;
    border-radius: 2px;
}

.input-row {
    margin-bottom: 20px;
}

.input-row label {
    color: #75726c;
}

.input-field {
    width: 100%;
    border-radius: 2px;
    padding: 10px;
    border: #e0dfdf 1px solid;
    box-sizing: border-box;
    margin-top: 2px;
}

.span-field {
    font: Arial;
    font-size: small;
    text-decoration: none;
}

.btn-submit {
    padding: 10px 60px;
    background: #9e9a91;
    border: #8c8880 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    border-radius: 2px;
    cursor: pointer;
}

.errorMessage {
    background-color: #e66262;
    border: #AA4502 1px solid;
    padding: 5px 10px;
    color: #FFFFFF;
    border-radius: 3px;
}

.successMessage {
    background-color: #9fd2a1;
    border: #91bf93 1px solid;
    padding: 5px 10px;
    color: #3d503d;
    border-radius: 3px;
    cursor: pointer;
    font-size: 0.9em;
}

.info {
    font-size: .8em;
    color: #e66262;
    letter-spacing: 2px;
    padding-left: 5px;
}
  .fade-in {
  animation: fadeIn ease 10s;
  -webkit-animation: fadeIn ease 10s;
  -moz-animation: fadeIn ease 10s;
  -o-animation: fadeIn ease 10s;
  -ms-animation: fadeIn ease 10s;
  background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
}

.backimage {
  background-image: url("https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif");
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


@import url('https://fonts.googleapis.com/css?family=Roboto:300');

body {
  text-align:center;
  background:linear-gradient(141deg, #ccc 25%, #eee 40%, #ddd 55%);
  color:#555;
  font-family:'Roboto';
  font-weight:300;
  font-size:32px;
  padding-top:40vh;
  height:100vh;
  overflow:hidden;
  -webkit-backface-visibility: hidden;
  -webkit-perspective: 1000;
  -webkit-transform: translate3d(0,0,0);

}



div {
  display:inline-block;
  overflow:hidden;
  white-space:nowrap;
}

div:first-of-type {
  animation: showup 7s infinite;
}

div:last-of-type {
  width:0px;
  animation: reveal 7s infinite;
}

div:last-of-type span {
  margin-left:-355px;
  animation: slidein 7s infinite;
}

@keyframes showup {
    0% {opacity:0;}
    20% {opacity:1;}
    80% {opacity:1;}
    100% {opacity:0;}
}

@keyframes slidein {
    0% { margin-left:-800px; }
    20% { margin-left:-800px; }
    35% { margin-left:0px; }
    100% { margin-left:0px; }
}

@keyframes reveal {
    0% {opacity:0;width:0px;}
    20% {opacity:1;width:0px;}
    30% {width:355px;}
    80% {opacity:1;}
    100% {opacity:0;width:355px;}
}


p {
  font-size:12px;
  color:#999;
  margin-top:200px;
}

</style>





<!--<h2>Rólunk</h2>
<p>Varázstorony</p>
<p>Eszterházy Károly Egyetem, Eger</p>-->




  <div class="aboutcontainer">
  
    <?php
    //die("Az oldal fejlesztés alatt áll, elnézésüket kérjük a kellemetlenségekért!");
    ?>

<section class="credits">
  <header>
    <h1>Varázstorony<em> </em>Eger</h1>  
  </header>

  <div class="fade-in">
  <dl class="credits__single">
    <p>A weboldal az <em>Interaktív hardware – software-rendszer fejlesztése természettudományos ismeretek
népszerűsítése céljából a Varázstoronyban</em> című projekt részeként készült.</p>

    <dt>Projektet készítette</dt>
    <dd>Horváth Krisztián</dd>
    <dd>Keller Zsófia</dd>
    <dd>Oravecz Zsolt</dd>
    <dd>Sass-Gyarmati Norbert</dd>
    

    <dt>Weboldalt készítette</dt>
    <dd>Oravecz Zsolt</dd>
    <dd>Sass-Gyarmati Norbert</dd>
    <dd>Horváth Krisztián</dd>

    
    

    <dt>Témavezető</dt>
    <dd>Dr. Geda Gábor</dd>
    
  </dl>

<!--
  <h2>Csapat</h2>
  <dl class="credits__double">
    <dt>Design</dt>
    <dd>Sass-Gyarmati Norbert</dd>

    <dt>Térkép</dt>
    <dd>Oravecz Zsolt</dd>

    <dt>MQTT</dt>
    <dd>Oravecz Zsolt</dd>

    <dt>Eszközök kiépítése</dt>
    <dd>Horváth Krisztián</dd>
    <dd>Keller Zsófia</dd>
    <dd>Oravecz Zsolt</dd>
    <dd>Sass-Gyarmati Norbert</dd>
    <dd>Szűcs Norbert</dd>

    <dt>Adatbázis kapcsolatok</dt>
    <dd>Sass-Gyarmati Norbert</dd>
    <dd>Oravecz Zsolt</dd>

    <dt>Kvíz</dt>
    <dd>Sass-Gyarmati Norbert</dd>

    <dt>Beléptető modul</dt>
    <dd>Oravecz Zsolt</dd>
    <dd>Sass-Gyarmati Norbert</dd>

    <dt>Rezümé</dt>
    <dd>Keller Zsófia</dd>

  </dl>

  <h2>Külön köszönet a weblap megvalósításáért</h2>
  <ul class="credits__inline">
    <li>Keller Zsófia</li>
    <li>Szűcs Norbert</li>
    <li>Horváth Krisztián</li>
    <li>Dr. Geda Gábor</li>
  </ul>

  <h2>Források</h2>
  <div class="credits__music">
    <dl>
      <dt>Infó</dt>
      <dd>https://uni-eszterhazy.hu</dd>
    </dl>
    <dl>
      <dt>Kép</dt>
      <dd>https://www.varazstorony.hu</dd>
      <dd>https://uni-eszterhazy.hu/hu</dd>
      <dd>EKE- Varázstorony</dd>
    </dl>
    <dl>
      <dt>Kezdőlap</dt>
      <dd>https://uni-eszterhazy.hu/hu/egyetem/kultura/varazstorony</dd>
    </dl>
    <dl>
      <dt>Animáció</dt>
      <dd>https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif</dd>
    </dl>
  </div>
-->
<h2>Külön köszönet</h2>
  <ul class="credits__inline">
    <li>Szűcs Norbert</li>
    <li>Dr. Geda Gábor</li>
  </ul>

  <h2>Források</h2>
  <div class="credits__music">
    <dl>
      <dt>Infó</dt>
      <dd>https://uni-eszterhazy.hu</dd>
    </dl>
    <dl>
      <dt>Kép</dt>
      <dd>https://www.varazstorony.hu</dd>
      <dd>https://uni-eszterhazy.hu/hu</dd>
      <dd>EKE- Varázstorony</dd>
    </dl>
    <dl>
      <dt>Kezdőlap</dt>
      <dd>https://uni-eszterhazy.hu/hu/egyetem/kultura/varazstorony</dd>
    </dl>
    <dl>
      <dt>Animáció</dt>
      <dd>https://media.giphy.com/media/UYBDCJjwOd9Re/giphy.gif</dd>
    </dl>
  </div>
  

  <footer>
    <img src="assets/images/varazs.png" alt="Avatar" class="image">
    <h4>&copy</span> Eszterházy Károly Egyetem, Eger</h4>
  </footer>
</section>
</div>

<?php
if(!empty($_POST["send"])) {
    $name = $_POST["userName"];
    $email = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

    $conn = mysqli_connect("89.40.126.232:8080", "varazstorony", "VarazsTorony_18", "varazstorony") or die("Connection Error: " . mysqli_error($conn));
    mysqli_query($conn, "INSERT INTO contact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
    $insert_id = mysqli_insert_id($conn);
    //if(!empty($insert_id)) {
       $message = "Your contact information is saved successfully.";
       $type = "success";
    //}
}
require_once "contact-view.php";
?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="form-container">
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">
            <h1>Kapcsolatfelvétel</h1>
            <div class="input-row">
                <label style="padding-top: 20px;">Név</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Tárgy</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Üzenet</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Küldés" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

<!-- Add font awesome icons -->
<!--
<h3>Weblap fejlesztőinek elérhetőségei:</h3>
<a href="https://www.facebook.com/norbi.sassgyarmati/" class="fa fa-facebook"></a> Sass-Gyarmati Norbert
<br>
<br>
  <a href="#" class="fa fa-facebook"></a> Oravecz Zsolt  
<br>
<br>
<a href="#" class="fa fa-facebook"></a> Horváth Krisztián
-->

</div>





