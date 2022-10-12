<?php

    //archivo para establecer la conexion con la base de datos;

    $db = '(DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)
    (HOST = 192.168.69.5)(PORT = 1521))
    (CONNECT_DATA =
    (SERVER = DEDICATED)
    (SERVICE_NAME = cabildo)))';

    //recibo datos de index.js
    $username1='GADSPP';
    $password1='FEEDBACK17';

    $var_con = oci_connect($username1, $password1, $db, 'UTF8');
    $sqldatos="select seg03com FROM ST_SEG03 WHERE seg03codi='$username1' AND SEG03REVERSO='S' ";
	$id_sentenciadat = oci_parse($var_con, $sqldatos);
	oci_execute($id_sentenciadat);
	
    if( $fila = oci_fetch_array($id_sentenciadat) ){

        echo $fila[0];

    }


?>