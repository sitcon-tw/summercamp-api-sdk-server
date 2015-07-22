<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Content-Type:application/json;charset=UTF-8');

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "https://maps.googleapis.com/maps/api/place/radarsearch/json?location=" . $_GET['latlng'] . "&radius=5000&types=food&key=AIzaSyC3M9N_1PUKreLiiAk1fhmlTssml9O6mOw");
	curl_setopt($ch, CURLOPT_HEADER, false);

	curl_exec($ch);
	curl_close($ch);
?>
