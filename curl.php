<?php
$ch = curl_init();// set url
curl_setopt($ch, CURLOPT_URL, "google.fr");
//return the as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// echo output string
$output = curl_exec($ch);

echo $output;

        // close curl resource to free up system resources
curl_close($ch);
?>