<?php

    session_start();

        $userName = 'spellcaster';
        $passWord = 'spells1234';

        if($_POST["user"] === $userName && $_POST["password"] === $passWord){
            $_SESSION["inloggning"] = true;
            echo('Login');
            exit;
        }

?>