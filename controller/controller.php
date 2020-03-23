<?php

// LOGIN METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getLoginAuth($form){
    if (isset($form['pass']) && isset($form['pseudo']) && $form['pass'] === '1') {
        $_SESSION['pseudo'] = $form['pseudo'];
        $_SESSION['isConnected'] = true;
        if($_SESSION['isConnected'] === true){
            Header('Location: ../index.php');
        }
    } else {
        return $errors['pass'] = "Please enter 1 password to try our app !";
    }
}

// LOGOUT METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getUserLogout(){
    unset($_SESSION['isConnected']);
    unset($_SESSION['pseudo']);
    return session_destroy();
}