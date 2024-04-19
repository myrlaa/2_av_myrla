<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<div>
    <?php
        $n = $_GET["nome"];
        $e = $_GET["email"];
        $dat = $_GET["data"];
        $sex = $_GET["sexo"];
        $st = $_GET["status"];
        $p = $_GET["prof"];

        $data_nasc = new DateTime($dat);
        $data_atual = new DateTime();
        $diferenca = $data_atual -> diff($data_nasc);
        $idade = $diferenca ->y;
        echo "Nome: $n &#10004;&#65039;";
        echo "</br>E-mail: $e &#128242;";
        echo "</br>Idade: $idade &#128197;";
        echo "</br>Sexo: $sex &#10004;&#65039;";
        echo "</br>Status civil: $st &#10004;&#65039;";
        echo "</br>Profissão: $p &#128188;";
    
    ?>
    </br>
    <a href="ex4.html"><button>Voltar</button></a>


</div>
</body>
</html>