<?php
session_start();
$clientes = $_SESSION['clientes'] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Petshop</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <center><h1>Ficha técnica de nossos Clientes - Animais</h1></center>
  <div class="client-list">
    <ul>
      <?php foreach ($clientes as $cliente): ?>
      <li>
        <strong>Nome:</strong> <?php echo $cliente['nome']; ?><br>
        <strong>E-mail:</strong> <?php echo $cliente['email']; ?><br>
        <strong>Telefone:</strong> <?php echo $cliente['telefone']; ?><br>
        <strong>Raça do Animal:</strong> <?php echo $cliente['raca']; ?><br>
        <strong>Porte do Animal:</strong> <?php echo $cliente['porte']; ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <center><a class="button" href="index.php">Voltar para a página principal</a></center>
</body>
</html>
