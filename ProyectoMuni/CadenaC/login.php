<?php
//RECIBO DATOS DE SESION
session_start();
    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];

    if ( $user != null )
        {
            echo json_encode ($user);
        }
        else
        {
            echo json_encode($pass);   
    }

?>