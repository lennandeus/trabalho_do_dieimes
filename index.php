<?php
    include ("conexao.php");

    $consultar_banco = "SELECT * FROM tabela_lanche";

    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $quantidade_lanches = $retorno_consulta->num_rows; // Retornar quantidade de linhas
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
        <title>Document</title>
    </head>
    <body>
        <?php
        while($tabela_lanche = $retorno_consulta -> fetch_assoc()){
        
        ?>
    <div class="card" style="width: 18rem;">
  <img src="<?php echo $tabela_lanche ['bt_img']?>" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?php echo $tabela_lanche ['bt_nome']?></h5>
            <p class="card-text"><?php echo $tabela_lanche ['bt_ingredientes']?></p>
            <p class="card-text"><?php echo $tabela_lanche ['bt_preco']?></p>
            <a href="pedido.php" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    <?php
        }
    ?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>