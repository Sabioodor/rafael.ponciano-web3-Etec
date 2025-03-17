<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtvJ</title>
</head>
<body>
    <form method ='POST' action="j.php">
    Coloque o valor percorrido em Km: <input type = "text" name = 'Km' placeholder = "KM percorridos"> <br> <br>

    Coloque o valor gasto de combustível em L:    <input type = "text" name = "L" placeholder = "Litros gastos no total"> <br> <br>

<input type ="submit" value = "Calcular"> <br> <br>

</form>
</body>
</html>

<?php  
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {

$Km = $_POST ['Km'];

$L = $_POST ['L'];

$ConsMédio = $Km / $L;

echo "O consumo médio de combustível é: $ConsMédio";

}

?>