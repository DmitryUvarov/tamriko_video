<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => 'https://webhook.site/3a6f6f9d-e103-4ee4-9a88-4ebd0f336060',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => '',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 0,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => $_POST,
	CURLOPT_HTTPHEADER => array(
		'Content-Type: text/plain'
	),
));

$response = curl_exec($curl);

curl_close($curl);



$message = 'Дані надіслані!';

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
