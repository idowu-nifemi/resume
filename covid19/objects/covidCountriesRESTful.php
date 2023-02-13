<?php

$curl_countries = curl_init();

curl_setopt_array($curl_countries, array(
  CURLOPT_URL => $serverUrl.'countries',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$data_response_countries = curl_exec($curl_countries);

curl_close($curl_countries);

?>