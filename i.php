    <!DOCTYPE html>
    <html lang="pt-Br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AtvI</title>
    </head>
    <body>
        <form method = 'POST' action="i.php">
            <input type="text" name='valor' placeholder ='Digite o primeiro valor'>
            <input type='submit' value='Calcular'>
        </form>
    </body>
    </html>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $valor = $_POST['valor'];
    $acrs = $valor + ($valor * 0.16);
    $parcela = $acrs / 10;

    echo "O valor da parcela é : $parcela e o valor total é : $acrs";

}
    ?>