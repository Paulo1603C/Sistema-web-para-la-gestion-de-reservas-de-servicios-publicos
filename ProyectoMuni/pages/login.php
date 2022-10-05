<?php
    include "../CadenaC/cadena.php";
    $var_con = oci_connect($username1, $password1, $db, 'UTF8');
    if ( $var_con != false )
    {
        echo "conectado";
    }
    else
    {
        echo "No conecatdo";   
    }
?>