<?php

require_once("models/user.php");
$modelUser = new User();
$logged_user = $modelUser->getUser($_SESSION["id_user"]);

require("views/profile.php");
