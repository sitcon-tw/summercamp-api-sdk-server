<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Content-Type:application/json;charset=UTF-8');

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, "http://opendata.dot.taipei.gov.tw/opendata/gwjs_cityhall.json");
	curl_setopt($ch, CURLOPT_HEADER, false);

	curl_exec($ch);
	curl_close($ch);
?>
