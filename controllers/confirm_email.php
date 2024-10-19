<?php

require("models/user.php");
$modelUser = new User();

$bool_success = false;

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id_user = $url_parts[3];
$activation_key = $url_parts[5];

$user = $modelUser->getUser($id_user);

if ( trim($user["activation_key"]) == trim($activation_key) ) {
    $modelUser->activateUser($id_user);
    $bool_success = true;
}

require ("views/confirm_email.php");