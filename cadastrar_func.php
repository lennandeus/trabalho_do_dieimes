<?php
    include("conexao.php");  // Arquivo php referente ao banco de dados   
    if(isset($_POST['bt_nome_completo'])){
        /*-------------------------------------*/ 

            $nomecomp = $_POST['bt_nome_completo'];
            $data_nasc = $_POST['bt_data_nasc'];
            $habilidades = $_POST['bt_habilidades'];
            $ocupacao = $_POST['bt_ocupacao'];

        /*-------------------------------------*/

        $mysqli -> query("INSERT INTO tabela_func (nomecomp, data_nasc, habilidades, ocupacao) values ('$nomecomp', '$data_nasc', '$habilidades','$ocupacao')") or 
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
        <h1>Cadastro de Funcionários - Buteco do Nunes</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="">Nome Completo:</label>
                <input class="form-control" type="text" name="bt_nomecomp">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Data de Nascimento:</label>
                <input class="form-control" type="text" name="bt_data_nasc">
            </div>

            <div class="mb-3">
                <label class="form-label" for="">Habilidades:</label>
                <input class="form-control" type="text" name="bt_habilidades">
            </div>
            <div class="mb-3">
                <label class="form-label" for="">Ocupação:</label>
                <input class="form-control" type="text" name="bt_ocupacao">
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