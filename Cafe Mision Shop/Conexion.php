<?php

    $server = "127.0.0.1";
    $user = "root";
    $pass = "";
    $db = 'mision';
    $con = mysql_connect($server,$user,$pass)or die("No se pudo conectar al servidor");
    $sdb = mysql_select_db($db,$con)or die("Nada de base de datos")

?>