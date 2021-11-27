<?php

$curl = curl_init();

$username = "htgrp";
$password = "84deb21061cef5be6e19c8876967a02b";

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/bookings/10589692',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => false,    // for https
  CURLOPT_USERPWD        => $username . ":" . $password,
  CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;