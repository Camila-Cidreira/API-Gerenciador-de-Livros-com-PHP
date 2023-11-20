<?php include("config.php");   ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>
    
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="novo_usuario.php" target="_blank">Cadastro</a>
            <a class="navbar-brand" href="listar_usuario.php" target="_blank">Usuarios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" 
            aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
                

        <nav>
        <div class="container">
            <div class="row"> 
                <div class="col mt-5">
                    <?php
                        include("config.php");   
                        
                            switch(@$_REQUEST["page"]){
                                case "Cadastro":
                                    include("novo_usuario.php");

                                break;
                                case "salvar":
                                    include("salvar_usuario.php");
                                break;
                                case "listar_usuarios":
                                    include("listar_usuario.php");
                                break;
                                default:
                                    print "<h1>Bem-vindo a sua biblioteca online!</h1>";
                            }
                        ?>    
                    </div>  
                </div>
                
            </div>
        </div>    

    </body>
    
</html>  





                   
        
