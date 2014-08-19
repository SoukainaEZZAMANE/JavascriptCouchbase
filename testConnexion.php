<?php


$ch = curl_init('http://localhost:8080/projet/faculte/departement/formation');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Content-Type: application/json')
);
$result = curl_exec($ch);
$json = $result;
$obj= json_decode($json);
print_r($obj);


?>