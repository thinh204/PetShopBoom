<?php

if(!isset($_SESSION)){
    session_start();
}

function flash($name = '', $message = '', $class = 'form-message form-message-red'){
    if(!empty($name)){
        // If message is provided and no existing message in the session, set the flash message
        if(!empty($message) && empty($_SESSION[$name])){
            $_SESSION[$name] = $message;
            $_SESSION[$name.'_class'] = $class;
        }
        // If no message provided and an existing message in the session, display and unset the flash message
        else if(empty($message) && !empty($_SESSION[$name])){
            $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
            echo '<div class="'.$class.'" >'.$_SESSION[$name].'</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name.'_class']);
        }
    }
}

// Make sure to start the session at the beginning of your script if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


function redirect($location){
    header("location: ".$location);
    exit();
}