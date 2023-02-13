<?php

    $curl_category = curl_init();

    curl_setopt_array($curl_category, array(
    CURLOPT_URL => $serverUrl.'category='.$categoryName,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl_category);

    $data_response_category =  json_decode($response,true);


    curl_close($curl_category);

?>