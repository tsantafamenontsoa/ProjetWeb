<?php
$l1 = $_GET["lieu1"];

$l2 = $_GET["lieu2"];

$h = $_GET["horaire"];
$json = file_get_contents("trajet.json");

$parsed_json = json_decode($json);
$distance = $parsed_json->{$l1}->{$l2};
if(date($h)>17h && date($h)<19h)
  $distance += 0.1*$distance;
?>
