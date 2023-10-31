<?php 

    $hostname = "localhost";
    $usuario= "root";
    $senha="";
    $bancodedados="cadastro";
    $port="3307";
    
    $conn = new mysqli($host, $usuario, $senha, $bancodedados, $port);

    if($conn-> connect_errno){
        echo "falha ao conectar: (". $mysqli->connect_errno.")". $mysqli->connect_err;
    }

?>
