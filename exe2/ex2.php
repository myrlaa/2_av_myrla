<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status - idade</title>

</head>
<body>
<div>
    <?php
        $n = $_GET["nome"];
        $a = $_GET["ano"];
        $id  = date("Y") - $a ;
        if ($id <=11) {
            echo "$n";
            echo "</br>criança ";
           
        }
        elseif ($id >=12 && $id <= 14) {
            echo "$n";
            echo "</br>Adolescente";
        
        }elseif ($id >= 15 && $id <= 18 ) {
            echo "$n";
            echo "</br>Jovem";
           
        }elseif ($id >=19 && $id <= 64){
            echo "$n";
            echo "</br>Adulto";
        }
        else{
            echo "</br>Idoso";
        }
        echo "</br>";
        echo "$id anos"
    
    ?>
    </br>
    <a href="ex2.html"><Button>voltar</Button></a>


</div>
    
</body>
</html>