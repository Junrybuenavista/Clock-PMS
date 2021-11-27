<?php

$curl = curl_init();

$username = "htgrp";
$password = "84deb21061cef5be6e19c8876967a02b";
$url = "https://sky-us2.clock-software.com/pms_api/90805/12612/bookings/";

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sky-us2.clock-software.com/pms_api/90805/12612/bookings/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_SSL_VERIFYPEER => false,    // for https
  CURLOPT_USERPWD        => $username . ":" . $password,
  CURLOPT_HTTPAUTH       => CURLAUTH_DIGEST,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "booking": {
        "arrival": "2020-12-20",
        "departure": "2020-12-24",
        "status": "expected",
        "adults": null,
        "children": null,
        "arrival_time": "",
        "transfer_arrival": "",
        "transfer_departure": "",
        "departure_time": "",
        "reference_number": "#888",
        "is_guaranteed": false,
        "rate_id": null,
        "arrival_room_type_id": 27520,
        "arrival_room_id": 451044,
        "links": "example.com",
        "marketing_source": "Phone",
        "marketing_channel": "OTA",
        "guarantee_policy_id": null,
        "accept_charge_transfers": true,
        "early_arrival": false,
        "late_departure": false,
        "marketing_segment": "Education",
        "contact_person_id": null,
        "agent_id": null,
        "manual_prices_as_text": "",
        "manual_currency": "",
        "note": "booking notes",
        "custom_fields": {
            "Purpose_of_visit": "test",
            "Booker": null,
            "Booker_Phone_Number": null,
            "Reaosn_for_visit": null,
            "PASSPORT": null,
            "ID TYPE": null,
            "ACCEPT MARKETING EMAIL": null,
            "GDRP (STORE OR NOT STORE MY PROFILE)": null,
            "Birthdate": null,
            "Excorted_to_room": null
        },
        "guest_state": "",
        "guest_language": "",
        "guest_country": "",
        "guest_address": "",
        "guest_last_name": "Doe",
        "guest_first_name": "John",
        "guest_city": "",
        "guest_zip_code": "",
        "guest_phone_number": "",
        "guest_middle_name": "",
        "guest_e_mail": "email@emample.com",
        "guest_fax_number": "",
        "guest_person_title_id": null
    }
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;