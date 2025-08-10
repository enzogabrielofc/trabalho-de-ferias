<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>conversor de moedas</title>
</head>
<body>
        <main>
        <h1>Conversor de Moedas</h1>
<?php
    $cotacao = 5.17;
    $real = $_REQUEST["din"] ?? 0;
    $dolar = $real / $cotacao;

    echo "<p>Seus R$ " . number_format($real, 2, ",", ".") . 
         " equivalem a <strong>US$ " . number_format($dolar, 2, ",", ".") . "</strong></p>";
?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>