<?php
$servername = "localhost";
$username = "tyo_user";
$password = "Tigger10";
$dbname = "tyo";
$concertid = $_GET['id'];
$array = array();

$db = new mysqli($servername,$username,$password,$dbname);

if (!$db->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $db->error);
}

$stmt = $db->prepare("SELECT CONCAT(composer, ': ', piece) AS title FROM concert_details WHERE concert_id =?");
$stmt->bind_param('i', intval($concertid));
$stmt->execute();

$stmt->store_result();
$stmt->bind_result($title);

while($stmt->fetch())
{
    /*array_push($array, array($title, $composer, $mp3, $ogg));*/
	$array[] = array('title' => $title);
	}

$stmt->close();

echo json_encode($array);

?>