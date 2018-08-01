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

$stmt = $db->prepare("SELECT venue, DATE_FORMAT(date, '%D %M %Y') AS date, CONCAT('../pdf/',REPLACE(programme, ' ', '%20')) AS programme FROM concerts WHERE id =?");
$stmt->bind_param('i', intval($concertid));
$stmt->execute();

$stmt->store_result();
$stmt->bind_result($venue, $date, $programme);

while($stmt->fetch())
{
	$array = array('venue' => $venue, 'date' => $date, 'programme' => $programme);
	}

$stmt->close();

echo json_encode($array);

?>