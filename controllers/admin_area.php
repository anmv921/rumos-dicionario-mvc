<?php

require("models/user.php");
$modelUser = new User();

$users = $modelUser->getUsers();

require ("views/admin_area.php");
