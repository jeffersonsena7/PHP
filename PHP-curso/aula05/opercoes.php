<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "<h2>Valores recebidos: $n1 e $n2</h2>";
        echo "A soma de $n1 e $n2 é igual = ".($n1+$n2);
        echo "<br/> A subtração de $n1 e $n2 é igual = ".($n1-$n2);
        echo "<br/> A multiplicação de $n1 e $n2 é igual = ".($n1*$n2);
        echo "<br/> A Divisão de $n1 e $n2 é igual = ".($n1/$n2);
        echo "<br/> O resto ou modulo de $n1 e $n2 é igual = ".($n1%$n2);
    ?>
</div>
</body>
</html>
