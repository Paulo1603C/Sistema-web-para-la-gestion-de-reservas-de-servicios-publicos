<?php

    //archivo para establecer la conexion con la base de datos;
    
    $db = '(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)
    (HOST = 192.168.69.5)(PORT = 1521))
    (CONNECT_DATA =
    (SERVER = DEDICATED)
    (SERVICE_NAME = cabildo)))';

    //recibo datos de index.js
    //$username1='GADSPP';
    $username1 = isset($_POST['user']) ? $_POST['user'] : null;
    //$password1='FEEDBACK17';
    $password1 = isset($_POST['pass']) ? $_POST['pass'] : null;
    //$var_con = oci_connect($username1, $password1, $db, 'UTF8');

    echo validarUsuarios($username1, $password1);


    function validarUsuarios( $username1, $password1){
        //$var_con = oci_connect($username1, $password1, $db, 'UTF8');
        if ( $username1 != null )
        {
            return json_encode ("conectado");
        }
        else
        {
            return json_encode("No conecatdo");   
        }
    }

?>