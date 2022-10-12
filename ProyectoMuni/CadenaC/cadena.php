<?php

    //archivo para establecer la conexion con la base de datos;
    include "server.php";
    
    //recibo datos de index.js
    //$username1='GADSPP';
    $username1 = isset($_POST['user']) ? $_POST['user'] : null;
    //$password1='FEEDBACK17';
    $password1 = isset($_POST['pass']) ? $_POST['pass'] : null;

    session_start();
    $_SESSION['username'] = $username1;   
    $_SESSION['password'] = $password1; 

    $var_con = oci_connect($username1, $password1, $db, 'UTF8');

   if ( $var_con == true ){
        echo json_encode("ok 200..");   
    }else{
        echo json_encode ( "data no found" );
    }

?>