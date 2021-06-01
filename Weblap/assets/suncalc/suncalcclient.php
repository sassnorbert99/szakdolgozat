
<?php
	require_once('suncalc.php'); 
use \AurorasLive\SunCalc;




function Solardata($_date,$_longitude,$_latitude){
	$date=$_date;
	$time="14:35";
	$longitude=$_longitude;
	$latitude=$_latitude;

	
	// initialise library class with date and coordinates today's sunlight times for Paris
	//$sc = new AurorasLive\SunCalc(new DateTime(date("Y-m-d H:i:s")), 47, 19);
	$sc=new AurorasLive\SunCalc(new DateTime($date.'T'.$time.':00.012345'), $longitude,$latitude);

	// format sunrise time from the DateTime object
	$sunTimes = $sc->getSunTimes();
	$sunriseStr = $sunTimes['sunriseEnd']->format('H:i');
	$sunriseEnd=	$sunTimes['sunsetStart']->format('H:i');
	$solarNoon= $sunTimes['solarNoon']->format('H:i');
	// get position of the sun (azimuth and altitude) at today's sunrise
	$sunposition=$sc->getSunPosition();
	$azimuthactually=$sunposition->azimuth*180/M_PI+180;
	$altitudeactually=$sunposition->altitude*180/M_PI;

	$start = new AurorasLive\SunCalc(new DateTime($date.'T'.$sunriseStr.':00.012345'), $longitude,$latitude);
	$morningsunposition=$start->getSunPosition();
	$azimuthmorning=$morningsunposition->azimuth*180/M_PI+180;
	$azimuthmorning=round($azimuthmorning,2);
	$altitudemorning=$morningsunposition->altitude*180/M_PI;
	$altitudemorning=round($altitudemorning,2);

	$end = new AurorasLive\SunCalc(new DateTime($date.'T'.$sunriseEnd.':00.012345'), $longitude,$latitude);
	$eveningsunposition=$end->getSunPosition();
	$azimuthevening=$eveningsunposition->azimuth*180/M_PI+180;
	$azimuthevening=round($azimuthevening,2);
	$altitudeevening=$eveningsunposition->altitude*180/M_PI;
	$altitudeevening=round($altitudeevening,2);

	$noon=new AurorasLive\SunCalc(new DateTime($date.'T'.$solarNoon.':00.012345'), $longitude,$latitude);
	$noonsunposition=$noon->getSunPosition();
	$azimuthnoon=$noonsunposition->azimuth*180/M_PI+180;
	$azimuthnoon=round($azimuthnoon,2);
	$altitudenoon=$noonsunposition->altitude*180/M_PI;
	$altitudenoon=round($altitudenoon,2);
	
	//Add one hour to time
	/*$timestamp = strtotime($sunriseStr) + 60*60;
	$time = date('H:i', $timestamp);
	$sunriseStr= $time;//11:09

	$timestamp = strtotime($sunriseEnd) + 60*60;
	$time = date('H:i', $timestamp);
	$sunriseEnd= $time;//11:09*/

	$informations=array(
		"actuallyday" => $date,
		"sunriseStr" => $sunriseStr,
		"morningazimuth" => $azimuthmorning,
		"morningaltitude" => $altitudemorning,
		"sunriseEnd"	=> $sunriseEnd,
		"eveningazimuth" => $azimuthevening,
		"eveningaltitude" => $altitudeevening,
		"solarNoon" => $solarNoon,
		"azimuthnoon" => $azimuthnoon,
		"altitudenoon" => $altitudenoon
	
	
	);
	
	return $informations;
	
}






    
    	 
    

  


?>

   

