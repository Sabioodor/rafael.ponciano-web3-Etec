<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv-D</title>
</head>
<body>
    <form method='POST' action="d.php">
        <input type="text" name ='valor1' placeholder = 'Digite o 1° valor'>
        <input type="text" name ='valor2' placeholder = 'Digite o 2° valor'>
        <input type='submit' value='Calcular'>
    </form>
</body>
</html>

<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST'){

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $Calc = ($valor1 ** 2) + ($valor2 ** 2) ;
    echo "O quadrado do 1° valor ($valor1) mais a soma do quadrado do 2° valor ($valor2) é: $Calc";
}

?>