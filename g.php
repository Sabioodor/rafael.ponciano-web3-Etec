<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtvG</title>
</head>
<body>
    <form method='POST' action="g.php">
        <input type="text" name = 'comprimento' placeholder='Digite o comprimento'>
        <input type="text" name = 'largura' placeholder='Digite a largura'>
        <input type="text" name = 'altura' placeholder='Digite a altura'>
        <input type='submit' value='Calcular'>
    </form>
</body>
</html>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comprimento = $_POST['comprimento'];
    $largura = $_POST['largura'];
    $altura = $_POST['altura'];

    $volume =$comprimento * $largura * $altura;
    echo "O volume do seu retangulo é : $volume";
}

?>