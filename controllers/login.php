<?php

require("models/user.php");
$modelUser = new User();
$bool_success = false;
$arr_errors = [];
$bool_validationError = false;

if ( isset( $_POST["submit-login"] ) ) {

    // Sanitization to prevent cross-site scripting
    foreach( $_POST as $key => $value ) {
        $_POST[ $key ] = htmlspecialchars( strip_tags( trim( $value ) ) );
    }

    // Validations
    if ( 
        empty($_POST["email"]) |
        filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false
     ) {
        $arr_errors[] = "Invalid email";
        $bool_validationError = true;
    }

    if ( 
        empty($_POST["password"]) | 
        mb_strlen($_POST["password"]) < 8 |
        mb_strlen($_POST["password"]) > 1000
    ) {
        $arr_errors[] = "Invalid password";
        $bool_validationError = true;
    }




    if ( $bool_validationError === false ) {


        $user = $modelUser->getByEmail( $_POST["email"] );
        if ( $user["is_active"] == 0 ) {
            $arr_errors[] = "The user is inactive";
            $bool_success = false;

        } else {
            // User is active
            if (
                !empty($user) &&
                password_verify($_POST["password"], $user["password"]) 
            ){
                $_SESSION["id_user"] = $user["id_user"];
    
                $bool_success = true;
    
                // Todo add a dialog before redirect
                header("Location: " . ROOT . "/");
            }
            else{
                $arr_errors[] = "Wrong email or password";
            }
        }


        
    }

}

require("views/login.php");