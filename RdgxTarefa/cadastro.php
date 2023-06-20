
<!DOCTYPE html>
<html>
<head>
  <title>Petshop</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <h1><center>Cadastro de Clientes</center></h1>
  <form method="POST" action="">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" required><br>

    <label for="telefone">Telefone:</label>
    <input type="tel" name="telefone" required><br>

    <label for="raca">Raça do animal:</label>
    <input type="text" name="raca" required><br>

    <label for="porte">Porte do animal:</label>
    <select name="porte" required>
      <option value="pequeno">Pequeno</option>
      <option value="medio">Médio</option>
      <option value="grande">Grande</option>
    </select><br>

    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $raca = $_POST['raca'];
  $porte = $_POST['porte'];

  $cliente = array(
    'nome' => $nome,
    'email' => $email,
    'telefone' => $telefone,
    'raca' => $raca,
    'porte' => $porte
  );

  $_SESSION['clientes'][] = $cliente;
  header('Location: lista_clientes.php');
  exit();
}
?>
