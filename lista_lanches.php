<?php
    include ("conexao.php");

    $consultar_banco = "SELECT * FROM tabela_lanche";

    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $quantidade_pedidos = $retorno_consulta->num_rows; // Retornar quantidade de linhas

   

?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Lista de Lanches - Buteco - Nunes</h1>
        <table class="table table-striped">
            <tr>
                <th>Preço do lanche</th>
                <th>Imagem</th>
                <th>Ingredientes</th>
                <th>Nome</th>
                <th>Funcionalidades</th>
            </tr>

                <?php
                    while ($tabela_lanche = $retorno_consulta -> fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $tabela_lanche['preco']; ?></td>
                    <td><?php echo $tabela_lanche['img']; ?></td>
                    <td><?php echo $tabela_lanche['ingredientes']; ?></td>
                    <td><?php echo $tabela_lanche['nome']; ?> </td>
                    <td><a class="btn btn-danger" href="deletar_lanche.php?codigo_lanche=<?php echo $tabela_lanche['id_lanche'];?>">Deletar</a></td>
                </tr>
                <?php
                    }
                
                ?>
            
        </table>
        <a class="btn btn-warning" href="cadastrar_lanche.php">Voltar</a>
        
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>