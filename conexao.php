<?php


    $hostname = "localhost";
    $banco ="tabela_lanche";
    $usuario = "root";
    $senha = "";


    $mysqli = new mysqli ($hostname, $banco, $usuario, $senha);

    if($mysqli->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_errno;
    }

?>