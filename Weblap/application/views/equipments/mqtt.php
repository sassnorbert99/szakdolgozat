<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/assets/phpMQTT/phpMQTT.php');  


			

 function Publish($topics,$message){
 	$server = '89.40.126.232';     // change if necessary
			$port = 1883;                     // change if necessary
			$username = 'cartesius';                   // set your username
			$password = 'labor18';                   // set your password
			$client_id = 'CARTESIUS_CONTROLLER'; // make sure this is unique for connecting to sever - you could use uniqid()
	$mqtt = new phpMQTT($server, $port, $client_id);

			if ($mqtt->connect(true, NULL, $username, $password)) {
			$mqtt->publish($topics, $message, 0, false);
			$mqtt->close();
				} else {
    				echo "Time out!\n";
				}
}