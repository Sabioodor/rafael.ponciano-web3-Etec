<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AtvH</title>
</head>
<body>
    <form method ='POST' action="h.php">
        <input type="text" name = 'valor' placeholder ='Digite o primeiro valor'>
         <input type ='submit' value = 'Calcular'>
    </form>
</body>
</html>

<?php   
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$valor = $_POST['valor'];
$desconto = $valor * 0.27;
echo "O valor do desconto é : $desconto";
}
?>