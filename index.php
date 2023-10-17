<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- JavaScript (Opcional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Gerenciador de LIvros</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="novo_usuario.php">Cadastro</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" 
            aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="index.html">Home<span class="sr-only">(página atual)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="listar_livros.php">Biblioteca</a>
                    </li>
                </ul>
                
            </div>

            <div class="container">
                <div class="row"> 
                    <div class="col mt-5">
                        <?php
                            include("config.php");   
                            switch(@$_REQUEST["page"]){
                                case "Cadastro":
                                    include("novo_usuario.php");
                                break;
                                case "Biblioteca":
                                    include("listar_livros.php");
                                break;
                                case "salvar":
                                    include("salvar_usuario.php");
                                break;
                                default:
                                    print "<h1>Bem-vindo ao seu Gerenciador de Livros!</h1>";
                            }
                        ?>
                    </div>  
                </div>
            </div>
        </nav>
  </body>
</html>  
        
  



                   
        