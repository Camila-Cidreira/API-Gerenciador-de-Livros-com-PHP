<?php 
    // define('HOST','Localhost');
    // define('USER', 'root');
    // define('PASS','');
    // define('BASE', 'cadastro');
    $hostname = "127.0.0.1";
    $usuario= "root";
    $senha="";
    $bancodedados="cadastro";
    $port="3306";
    

    // $conn = new MySqli(HOST, USER, PASS, BASE);
    $conn = new mysqli($host, $usuario, $senha, $bancodedados, $port);

    if($conn-> connect_errno){
        echo "falha ao conectar: (". $mysqli->connect_errno.")". $mysqli->connect_err;
    }

?>