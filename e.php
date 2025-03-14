<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv-E</title>
</head>
<body>
    <form method='POST'action="e.php">
        <input type="text" name='peso' placeholder='Digite o peso'>
        <input type="text" name='altura' placeholder='Digite a altura'>
        <input type='submit' value='Calcular'>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / ($altura ** 2);
    echo "Seu IMC é: $imc";
}

?>