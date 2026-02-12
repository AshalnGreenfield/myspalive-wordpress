<?php


	$code = $_GET['code'];

	$access="cwjg334nSH2sgduYjT4w2Q:PgBKogYLDo8yh3SoJewIwt10CWGHUorP";

	
	$query = "grant_type=authorization_code&code=$code&redirect_uri=https://myspalive.com/zoom.php";
	
	$token_url="https://zoom.us/oauth/token?" . $query;

	
	$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $token_url,
		CURLOPT_SSL_VERIFYPEER => true,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $query,
		CURLOPT_HTTPHEADER => array(
		    "authorization: Basic " . base64_encode($access),
		    "content-type: application/json",
		  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);
	 
	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
	  echo $response;
	}

	exit;

?>