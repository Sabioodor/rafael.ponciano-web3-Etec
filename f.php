<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv-F</title>
</head>
<body>
    <form method='POST'action="f.php">
        <input type="text" name='produto' placeholder='Digite o nome do produto'>
        <input type='submit' value='Calcular'>
    </form>
</body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $produto = $_POST['produto'];

    $promocao = $produto - ($produto * 0.07);

    echo "Valor do produto: $produto <br>";
    echo "valor do desconto: 7% <br>";
    echo "Valor do produto com desconto: $promocao";

  }