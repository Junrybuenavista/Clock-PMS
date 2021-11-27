<?php

		$curl = curl_init();

		$username = "htgrp";
		$password = "84deb21061cef5be6e19c8876967a02b";
		//room type 30192 30191 30190
		//rate plan 34045 34044 34043
		//room id   474404 474403
		curl_setopt_array($curl, array(
			  //CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/room_types/',
			  //CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/rooms/',
			  //CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/rates/',
			  CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/rates_availability/?from=2021-11-01&to=2021-11-30&rates=364890&room_types=30191',
			  //CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/rates_availability?from=2021-11-01&to=2021-11-30&rates%5B%5D=364891&room_types%5B%5D=30191',
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
		echo "<br><br><br>";

$json = $response;

$arr = json_decode($json, TRUE);

print_r($arr);