<?php

$curl_summary = curl_init();

curl_setopt_array($curl_summary, array(
  CURLOPT_URL => $serverUrl.'summary',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl_summary);

$data_response_summary =  json_decode($response,true);

curl_close($curl_summary);

?>