<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $saque = $_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required
                   value="<?=$saque?>">
            <p style="font-size: 0.6em"><sup>*</sup>Notas disponíveis:
               R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
<?php
    $resto = $saque;
    // Saque de R$100
    $tot100 = floor($resto / 100);
    $resto %= 100;

    // Saque de R$50
    $tot50 = floor($resto / 50);
    $resto %= 50;

    // Saque de R$10
    $tot10 = floor($resto / 10);
    $resto %= 10;

    // Saque de R$5
    $tot5 = floor($resto / 5);
    $resto %= 5;
?>
<section>
    <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado</h2>
    <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
    <ul>
        <li><?=$tot100?> x R$100</li>
        <li><?=$tot50?> x R$50</li>
        <li><?=$tot10?> x R$10</li>
        <li><?=$tot5?> x R$5</li>
    </ul>
</section>
    </body>
    </html>