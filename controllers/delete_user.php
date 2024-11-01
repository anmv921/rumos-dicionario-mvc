<?php

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$id = $url_parts[2];
$bool_success = false;

require_once("models/user.php");
$modelUser = new User();

$modelUser->deleteUser($id);

$_SESSION["user_delete_ok"] = true;

header("location:" . ROOT . "/admin_area/" );

