<?php
	$src = $_GET['src'];
	$code = "check_preferences";
	// $userAgent = $_SERVER['HTTP_USER_AGENT'];
	//Se hizo un arreglo dentro de la aplicacion ya puede manejar url igual que web
	// if (strpos($userAgent, 'Mobile') !== false) {
	// 	// Dispositivo móvil
	// 	header("Location: myspalive://$code");
	// 	exit;
	// } else {
		// Navegador web
		if(isset($src) ){
			if($src == 'dev'){
				header("Location: https://flutterdev.myspalive.com/#/$code");
				exit;
			}else{
				header("Location: https://app.myspalive.com/#/$code");
				exit;
			}
		}else{
			header("Location: https://app.myspalive.com/#/$code");
			exit;
		}
	// }
?>