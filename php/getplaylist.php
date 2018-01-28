<?php
/*
$servername = "localhost";
$username = "tyo_user";
$password = "Tigger10";
$dbname = "tyo";*/
include('/var/www/tyo_config.php');
$concertid = $_GET['id'];
$array = array();

$db = new mysqli($servername,$username,$password,$dbname);

if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
}

$stmt = $db->prepare("SELECT title, CONCAT('../mp3/', mp3) AS mp3, CONCAT('../mp3/', ogg) AS ogg, composer FROM audio a JOIN concert_details cd ON a.concert_details_id = cd.id WHERE cd.concert_id =?");
$stmt->bind_param('i', intval($concertid));
$stmt->execute();

$stmt->store_result();
$stmt->bind_result($title, $mp3, $ogg, $composer);

while($stmt->fetch())
{
    /*array_push($array, array($title, $composer, $mp3, $ogg));*/
	$array[] = array('title' => $composer .": " .$title, 'mp3' => $mp3, 'ogg' => $ogg);
	}

$stmt->close();

echo json_encode($array);

?>