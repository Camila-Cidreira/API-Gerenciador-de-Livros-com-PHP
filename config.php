<?php 
    $host = "localhost";
    $usuario= "root";
    $senha="";
    $bd="cadastro";

    $conn = new mysqli($host, $usuario, $senha, $bd);

    if($conn-> connect_errno){
        echo "falha conexao";
    }

?>