<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listar Usuários</title>
    </head>
    <body>
        <h1>Listar Usuários</h1>
        <?php 
            include("config.php");
            $sql= "SELECT * FROM usuarios";
            $res=$conn->query($sql);
            $total=$res->num_rows;

<<<<<<< HEAD
    if($total>0){
        while($row = $res->fetch_object()){
?>         
        <div>
            <span><?php echo $row->id; ?></span>
            <span><?php echo $row->nome; ?></span>
            <span><?php echo $row->email; ?></span>
            <span><?php echo $row->senha; ?></span>
     
        </div>
<?php }
    }else{
        print "<p>vazio</p>";
    }
?>
<a href="index.php">Voltar</a>
=======
            if($total>0){
                while($row = $res->fetch_object()){
        ?>         
                <div>
                    <span><?php echo $row->id; ?></span>
                    <span><?php echo $row->nome; ?></span>
                    <span><?php echo $row->email; ?></span>
                    <span><?php echo $row->senha; ?></span>
            
                </div>
        <?php }
            }else{
                print "<p>vazio</p>";
            }
        ?>
        <a href="index.php">Voltar</a>
        
    </body>
</html>
>>>>>>> e860b608ae61104fb6e031b56f6eba0f7fed3b45
