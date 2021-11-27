<?php

$curl = curl_init();

$username = "htgrp";
$password = "84deb21061cef5be6e19c8876967a02b";
$url = "https://sky-us2.clock-software.com/pms_api/90805/12612/bookings/";
curl_setopt_array($curl, array(
        CURLOPT_URL            => $url,
        CURLOPT_HEADER         => true,    
        CURLOPT_VERBOSE        => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_SSL_VERIFYPEER => false,    // for https
        CURLOPT_USERPWD        => $username . ":" . $password,
        CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query($post_data) 
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;