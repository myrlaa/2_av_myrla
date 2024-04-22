<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - Aluno</title>
</head>
<body>
<div>
    <?php
    $n = $_GET["nome"];
    $n1 = $_GET["not1"];
    $n2 = $_GET["not2"];
    $n3 = $_GET["not3"];
    $n4 = $_GET["not4"];
    $soma = $n1 +  $n2 + $n3 + $n4;
    $media = $soma/4;
    if ($media >= 7) {
        echo "Aluno: $n";
        echo "</br>Média: $media";
        echo "</br>Situação: Aprovado &#9786; &#10004;";
    }elseif ($media >= 5 && floor($media) <=6) {
        echo "Aluno: $n";
        echo "</br>Média: ".floor($media);
        echo "</br>Situação: Recuperação &#128549; &#128078;";
    }else{
        echo "Aluno: $n";
        echo "</br>Média: $media ";
        echo "</br>Situação: Reprovado &#10008; &#9785;";
    }
    ?>
    </br>
    <a href="ex3.html"><button>VOLTAR</button></a>



</div>
    
</body>
</html>