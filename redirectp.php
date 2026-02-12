<?php

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $json_data = array(
            'event_name' => 'Lead',
            'event_time' => time(),
            'user_data' => ['client_ip_address' => $ip,'client_user_agent' => $_SERVER['HTTP_USER_AGENT']],
            'opt_out' => true,
        );

    $data = array();
    $data['data'][] = $json_data;
    
    // Load WordPress config to get Facebook credentials
    if (!defined('FB_ACCESS_TOKEN') || !defined('FB_PIXEL_ID')) {
        require_once(__DIR__ . '/wp-config.php');
    }
    
    $fb_url = 'https://graph.facebook.com/v15.0/' . FB_PIXEL_ID . '/events?access_token=' . FB_ACCESS_TOKEN;

    // echo json_encode($data); exit;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $fb_url);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
    curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($curl, CURLOPT_POST, true); 
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $result = curl_exec($curl);

    curl_close($curl);

        $user_agent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($user_agent, 'iPhone') !== false) {
        header('Location: https://apps.apple.com/us/app/myspalive/id1550629274?ppid=41795db2-73d3-4dc4-9ee3-914123b1e045');
        exit;
    } elseif (strpos($user_agent, 'Android') !== false) {
        header('Location: https://play.google.com/store/apps/details?id=com.spalive.app&listing=patients');
        exit;
    } else {
        header('Location: https://app.myspalive.com/login');
    }
?>