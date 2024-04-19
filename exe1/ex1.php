<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
<div>
    <?php
        $v = $_GET["val"];
        $d = 5.20;
        $r = $v - $d;
        echo "valor inserido: R$ ".number_format($v,2,",",".");
        echo "</br>Esse valor em Dólar: UU$ ".number_format($r,2,",",".");
        echo "</br>Cotação de hoje é: R$ ".number_format($d,2,",",".");

    ?>
    </br>
    <a href="ex1.html"><button>voltar</button></a>

</div>
    
</body>
</html>