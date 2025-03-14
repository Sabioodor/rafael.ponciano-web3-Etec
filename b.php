<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv-B</title>
</head>
<body>
    <form method='POST' action="b.php">
        <input type="text" name="valor1" placeholder="Digite o valor">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){ //verifica se o método de requisição é POST
                                          //IF não é necessário, mas é uma boa prática para evitar que o código seja executado sem que o formulário seja submetido
    $calcular = $valor1 = $_POST['valor1'] * 0.15;

    echo "O valor do produto com 15% de desconto é: $calcular";
}
    ?>