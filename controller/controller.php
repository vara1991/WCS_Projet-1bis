<?php

// LOGIN METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getLoginAuth($form){

    if (isset($form['pass']) && isset($form['pseudo']) && $form['pass'] === '1') {
        $_SESSION['speudo'] = $form['speudo'];
        $_SESSION['isConnected'] = true;
        if($_SESSION['isConnected'] === true){
            Header('Location: ../index.php');
         }
     }
}

// LOGOUT METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getUserLogout(){
    unset($_SESSION['isConnected']);
    unset($_SESSION['pseudo']);
    return session_destroy();
}