<?php

require_once __DIR__ . "/vendor/autoload.php";

use Location\Coordinate;
use Location\Distance\Vincenty;
$token = '3d658956940762cd52c42dbddd07f93071b067c7';
$secret = '80ff72a1a35b0ce6b9bb98d0bceea6023c8371a5';
$dadata = new \Dadata\DadataClient($token, $secret);

$address = $_POST["address"];

$response = $dadata->clean("address", $address);

$coordinate1 = new Coordinate(55.662945, 37.485909);
$coordinate2 = new Coordinate($response["geo_lat"], $response["geo_lon"]);

$calculator = new Vincenty();

echo "Примерное расстояние от офиса до $address" . "<br>" . ceil($calculator->getDistance
    ($coordinate1, $coordinate2)) . " метров или " . ceil($calculator->getDistance
    ($coordinate1, $coordinate2)) / 1000 . " километров ";
?>
<br>
<a href="index.php">Посмотреть другое расстояние</a>




