<!DOCTYPE html>
<html lang="pt-br">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Biblioteca Online!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    
    </head>
    <body>
        <div class="container mt-4">
            <div classs="row align-itens-center">
                <div class="text-center">     
                    <h1>Bem-vindo ao sua biblioteca online!</h1>
                </div>
                    
                <div class="col-md-10 mx-auto col-lg-5">
                    
                    <div class="text-center">     
                        <h2>Login</h1>
                    </div>
                    <form class="p-4 p-md-5 border rounded-3 bg-light">  
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail"/>
                            <label for="inputEmail">E-mail</label>
                        </div>    
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha"/>
                            <label for="inputPassword">Senha</label>
                        </div>  
                        <div class="conta mb-3">
                            <p>Ainda não tem uma conta ?<a href="index.php"> Crie uma.</a></p></label>
                        </div>
                        <a class="w-100 btn-lg btn btn-success" href="biblioteca.php" role="button">ENTRAR</a>
                    </form>
                    

                </div>
            </div>

            <div class="container">
                <div class="row"> 
                    <div class="col mt-5">
                        <?php
                            include("config.php");   
                        
                            switch(@$_REQUEST["page"]){
                                case "Crie":
                                    include("index.php");

                                break;
                            }
                        ?>    
                    </div>  
                </div>
            </div>
    </body>  
           

</html>  



                   
        