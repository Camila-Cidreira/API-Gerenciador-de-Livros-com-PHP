<?php 
    include("config.php");
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}', '{$senha}')";
            $res = $conn->query($sql);

        break;
            if($res==true){
                print "<script>alert('usuario cadastrado')</script>";
                print "<script>location.href='listar_usuario.php'</script>";
            }
            break;

        case 'editar':
            //code...
        break;
        case 'excluir':
            //code...
        break;
            


    }
?>