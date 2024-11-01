<?php
session_start();

// Token for csrf defense
if ( empty($_SESSION["token"]) ) {
    $_SESSION["token"] = bin2hex(random_bytes(35));
}

define("ENV", parse_ini_file(".env") );
define("ROOT", "");

$url_parts = explode("/", $_SERVER["REQUEST_URI"]);

$controller = $url_parts[1];

if (empty($controller)){
    $controller = "home";
}

if (!empty($url_parts[2])){
    $id = $url_parts[2];
}

if( !file_exists("controllers/" . $controller . ".php")) {
    http_response_code(404);
    die("Not Found");
}

require("controllers/" . $controller . ".php");
