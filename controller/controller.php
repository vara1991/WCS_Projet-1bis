<?php

// LOGIN METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getLoginAuth($form){
    if (!empty($form['pseudo'])) {
        if (!empty($form['pass'])) {
            if ($form['pass'] == 1) {
                $_SESSION['speudo'] = $form['speudo'];
                $_SESSION['isConnected'] = true;
                if ($_SESSION['isConnected'] === true) {
                    Header('Location: ../index');
                }
            }
        }
    }
}

// LOGOUT METHOD :
/* ------------------------------------------------------------------------------------------------- */
function getUserLogout(){
    unset($_SESSION['isConnected']);
    unset($_SESSION['pseudo']);
    session_destroy();
    header('Location: ../index');
}

function sendMail($form){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
            $to = "varaponegaire@gmail.com";
            $from = "v.gaire@hotmail.fr";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = "Coucou";
            $message = $_POST['message'];
            $content = "Objet:" . $subject . "<br>" . "Nom:" . $name . "<br>" . "Email:" . $email . "<br>" . "Message:" . $message;
            $headers = "from: " . $from;
            mail($to, $subject, $content, $headers);
        }
    }
}