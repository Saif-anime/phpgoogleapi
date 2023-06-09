<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('317584041975-6ha2jmhnedi98fhocgjtb3vs7b5jv17t.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Google/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 