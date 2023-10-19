<h1>Listar Usuários</h1>
<?php 
    include("config.php");
    $sql= "SELECT * FROM usuarios";
    $res=$conn->query($sql);
    $total=$res->num_rows;

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
