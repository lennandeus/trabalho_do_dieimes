<?php
        include('conexao.php');

        if(isset($_POST['bt_nome'])){
            /*----------------------------------*/
            $nome = $_POST['bt_nome'];
            $email = $_POST['bt_email'];
            $senha = $_POST['bt_senha'];
            $telefone = $_POST['bt_telefone'];
            $endereco = $_POST['bt_endereco'];
            /*----------------------------------*/
            $mysqli -> query("INSERT INTO cadastro (nome, email, senha, telefone, endereco) values('$nome', '$email', '$senha', '$telefone', '$endereco')") or
            die ($mysqli->error);

            if(isset($_POST['nome']) || isset($_POST['endereco'])) {

            if(($_POST['nome']) == 1){
                echo("Parabéns você está logado");

            if(($_POST['endereco']) == 1){
                echo("Parabéns você está logado");
            }    
            }
        }
    }
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
  <title>Página de Cadastro</title>
</head>
<body>
  <div class="signup-container">
    <h2>Cadastro Cliente</h2>
    <form action="cadastro.php" method="post">
    <input type="email" name="bt_email" placeholder="Email" required>
      <input type="password" name="bt_senha" placeholder="Senha" required>
      <input type="text" name="bt_nome" placeholder="Nome completo" required>
      <input type="text" name="bt_telefone" placeholder="Telefone" required>
      <input type="text" name="bt_endereco" placeholder="Endereço" required>
      <input type="submit" value="Cadastrar">
      <p>Já tem uma conta? <a href="login.php">Entrar</a></p>
    </form>
  </div>
</body>
</html>