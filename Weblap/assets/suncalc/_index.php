
<?php
	require_once('suncalc.php'); 
use \AurorasLive\SunCalc;
$date='2021-03-29';
$time='14:35';
$longitude=47;
$latitude=19;
?>


<html>
<head>
<title> 
</title>
</head>
<body>

<form method="post" >
      <table width="60%" align="center">
        <tr>
          <td>
        <input id="equipmentbutton" type="date" value="<?php echo date("Y-m-d");?>"  class="" name="date"
                value="ON"/>
          </td>
          <td>
        <input id="equipmentbutton" type="submit" class="btn btn-danger" name="button2"
                value="OFF"/>
          </td>
        </tr>
        </table>
    </form>

    <?php
    	  if(isset($_POST['button2'])) {
    	  		if( $_POST['date']==""){
    	  			date_default_timezone_set('UTC');
    	  			echo date("Y-m-d");
    	  			echo '<script language="javascript">';
					echo 'alert("Adj meg egy dátumot")';
					echo '</script>';
    	  		}
    	  		$date= $_POST['date'];
    	  }

    ?>

    <?php 

// initialise library class with date and coordinates today's sunlight times for Paris
//$sc = new AurorasLive\SunCalc(new DateTime(date("Y-m-d H:i:s")), 47, 19);
$sc = new AurorasLive\SunCalc(new DateTime($date.'T'.$time.':00.012345'), $longitude,$latitude);

// format sunrise time from the DateTime object
$sunTimes = $sc->getSunTimes();
$sunriseStr = $sunTimes['sunrise']->format('H:i');
$sunriseEnd=	$sunTimes['sunset']->format('H:i');
$solarNoon= $sunTimes['solarNoon']->format('H:i');
// get position of the sun (azimuth and altitude) at today's sunrise
$sunposition=$sc->getSunPosition();
$azimuthactually=$sunposition->azimuth*180/M_PI;
$altitudeactually=$sunposition->altitude*180/M_PI;

$start = new AurorasLive\SunCalc(new DateTime($date.'T'.$sunriseStr.':00.012345'), $longitude,$latitude);
$morningsunposition=$start->getSunPosition();
$azimuthmorning=$morningsunposition->azimuth*180/M_PI;
$altitudemorning=$morningsunposition->altitude*180/M_PI;

$end = new AurorasLive\SunCalc(new DateTime($date.'T'.$sunriseEnd.':00.012345'), $longitude,$latitude);
$eveningsunposition=$end->getSunPosition();
$azimuthevening=$eveningsunposition->azimuth*180/M_PI;
$altitudeevening=$eveningsunposition->altitude*180/M_PI;

$noon=new AurorasLive\SunCalc(new DateTime($date.'T'.$solarNoon.':00.012345'), $longitude,$latitude);
$noonsunposition=$noon->getSunPosition();
$azimuthnoon=$noonsunposition->azimuth*180/M_PI;
$altitudenoon=$noonsunposition->altitude*180/M_PI;
?>

   <h1> Actually day: <?php echo $date;?>   </h1>

<h2>SunRise Start: <?php echo $sunriseStr;?></h2>
<p>Azimuth: <?php echo $azimuthmorning;?> , Altitude: <?php echo $altitudemorning;?></p>
<h2>SunRise End: <?php echo $sunriseEnd;?></h2>
<p>Azimuth: <?php echo $azimuthevening;?> , Altitude: <?php echo $altitudeevening;?></p>
<h2>Solar Noon: <?php echo $solarNoon;?></h2>
<p>Azimuth: <?php echo $azimuthnoon;?> , Altitude: <?php echo $altitudenoon;?></p>
</body>
</html>

