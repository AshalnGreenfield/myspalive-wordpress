<?php


	// Configura las credenciales de la aplicación
	//$app_id = '279554517847774';
	//$app_secret = '58807762ff6ffc7027d0c490e24f200d';
	//$redirect_uri = 'https://myspalive.com/inoauth.php';

	/* $grantType = 'authorization_code';

	if (empty($code)) {
		echo 'Error code';
	}

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://api.instagram.com/oauth/access_token');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
	    'client_id' => $app_id,
	    'client_secret' => $app_secret,
	    'grant_type' => $grantType,
	    'redirect_uri' => $redirect_uri,
	    'code' => $code
	)));

	$result = curl_exec($ch); 

	curl_close($ch);*/
	$code = $_GET["code"];
	$userAgent = $_SERVER['HTTP_USER_AGENT'];
	
	if (strpos($userAgent, 'Mobile') !== false) {
		// Dispositivo móvil
		header("Location: myspalive://$code");
		exit;
	} else {
		// Navegador web
		// header("Location: https://flutterdev.myspalive.com/#/instagram_setup/$code");
		header("Location: https://app.myspalive.com/auth.html?$code");
		exit;
	}
?>