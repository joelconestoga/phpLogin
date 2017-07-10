<?php

    require_once __DIR__.'/../gplus_oauth/vendor/autoload.php';

    const CLIENT_ID = 'ADD_YOUR_CLIENT_ID';
    const CLIENT_SECRET = 'ADD_YOUR_CLIENT_SECRET';
    const REDIRECT_URI = 'ADD_YOUR_REDIRECT_URI';

    $client = new Google_Client();
    $client->setClientId(CLIENT_ID);
    $client->setClientSecret(CLIENT_SECRET);
    $client->setRedirectUri(REDIRECT_URI);
    $client->setScopes('email');

    $plus = new Google_Service_Plus($client);

    if (isset($_REQUEST['logout'])) {
        session_unset();
    }

    if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);
        $_SESSION['access_token'] = $client->getAccessToken();
        $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
        header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
    }

    if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
        $client->setAccessToken($_SESSION['access_token']);
        $me = $plus->people->get('me');

        // Get User data
        $id = $me['id'];
        $name =  $me['displayName'];
        $email =  $me['emails'][0]['value'];
        $profile_image_url = $me['image']['url'];
        $cover_image_url = $me['cover']['coverPhoto']['url'];
        $profile_url = $me['url'];

    } 
    
    $authUrl = $client->createAuthUrl();

?>
