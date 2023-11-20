<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Usuário</title>
</head>
<body>
    <h1>Seu Usuário foi Salvo!</h1>
    <button><a href="login.php">Voltar</a></button>
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
    
</body>
</html>

