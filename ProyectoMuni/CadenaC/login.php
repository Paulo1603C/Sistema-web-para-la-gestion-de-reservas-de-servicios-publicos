<?php

include "server.php";

//RECIBO DATOS DE SESION
session_start();
    $user = $_SESSION['username'];
    $pass = $_SESSION['password'];

    //$username1='GADSPP';
    //$password1='FEEDBACK17';
    $var_con = oci_connect($user, $pass, $db, 'UTF8');
    $sqldatos="select seg03com FROM ST_SEG03 WHERE seg03codi='$user' AND SEG03REVERSO='S' ";
	$id_sentenciadat = oci_parse($var_con, $sqldatos);
	oci_execute($id_sentenciadat);
	
    if( $fila = oci_fetch_array($id_sentenciadat) ){
        echo json_encode ( $fila[0] );
    }else{
        echo json_encode("ERROR 400");   
    }

?>