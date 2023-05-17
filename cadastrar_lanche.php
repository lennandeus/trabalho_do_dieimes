<?php
    include("conexao.php");  // Arquivo php referente ao banco de dados   
    if(isset($_POST['bt_preco'])){
        /*-------------------------------------*/ 

            $preco = $_POST['bt_preco'];
            $img = $_POST['bt_img'];
            $ingredientes = $_POST['bt_ingredientes'];
            $nome = $_POST['bt_nome'];

        /*-------------------------------------*/

        $mysqli -> query("INSERT INTO tabela_lanche (preco, img, ingredientes, nome) values ('$preco', '$img', '$ingredientes','$nome')") or 
    die ($mysqli->error);    
    }

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
    <div class="container">
        <h1>Cadastro de Lanches - Buteco do Nunes</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="">Preço:</label>
                <input class="form-control" type="text" name="bt_preco">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Imagem do lanche:</label>
                <input class="form-control" type="text" name="bt_img">
            </div>

            <div class="mb-3">
                <label class="form-label" for="">Ingredientes:</label>
                <input class="form-control" type="text" name="bt_ingredientes">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Nome do pedido:</label>
                <input class="form-control" type="text" name="bt_nome">
            </div>
            <div class="mb-3">
                <input class="btn btn-success" type="submit" value="Enviar">
                <a class="btn btn-danger" href="index.php">Cancelar</a>
                <a class="btn btn-warning" href="lista_pedidos.php">Pedidos</a>
                <a class="btn btn-warning" href="lista_funcionarios.php">Funcionários</a>
            </div>
        </form>
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>