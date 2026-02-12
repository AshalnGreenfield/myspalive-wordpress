<?php

	// Configura las credenciales de la aplicación
	// Api
	$client_id = '6452797cff341d9842622659-lrs93gvn';
	$client_secret = '47bb32d0-6f1b-4a56-9bea-d0e026ac6cb2';

	// $client_id = '64594b414e47c17d88256892-lhf891et';
	// $client_secret = '9939c62b-9c9e-48b1-abef-b489c0b284f1';
	$redirect_uri = 'https://services.leadconnectorhq.com';

	// Si se ha recibido un código de autorización en la URL, realiza la solicitud para obtener un token de acceso
	if(isset($_GET["code"])) {
	    // Inicializa CURL
	    $ch = curl_init();

	    // Configura la URL de la API para obtener un token de acceso
	    $url = "https://services.leadconnectorhq.com/oauth/token";

	    // Configura los encabezados de la solicitud
	    $headers = array(
	        "Content-Type: application/x-www-form-urlencoded"
	    );

	    // Configura los datos de la solicitud
	    $data = array(
	        "client_id" => $client_id,
	        "client_secret" => $client_secret,
	        "code" => $_GET["code"],
	        "grant_type" => "authorization_code",
	        "redirect_uri" => $redirect_uri
	    );



	    // Codifica los datos de la solicitud en formato JSON
	    // $data_json = json_encode($data);

	    // Configura las opciones de CURL
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	    curl_setopt($ch, CURLOPT_POST, true);
	    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	    // Ejecuta la solicitud CURL y obtiene la respuesta
	    $response = curl_exec($ch);
	    echo $response;
	    // Cierra la sesión CURL
	    curl_close($ch);
	    exit;
	    // Decodifica la respuesta JSON de la API en un objeto PHP
	    $token_data = json_decode($response);

	    echo $token_data->access_token; exit;
	}

	// Si no se ha recibido un código de autorización en la URL, redirecciona al usuario a la página de autorización de GoHighLevel
	else {
	    // Configura la URL de autorización de GoHighLevel
	    $auth_url = "https://api.gohighlevel.com/oauth/authorize";
	    $auth_url .= "?client_id=" . $client_id;
	    $auth_url .= "&redirect_uri=" . urlencode($redirect_uri);
	    $auth_url .= "&response_type=code";

	    // Redirecciona al usuario a la página de autorización de GoHighLevel
	    header("Location: " . $auth_url);
	    exit();
	}




?>