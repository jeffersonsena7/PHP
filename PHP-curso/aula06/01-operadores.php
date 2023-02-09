<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O preço recebido foi: $preco";
    $preco +=($preco*10/100);
    echo "<br/> E o novo preço com 10% de aumento sera R$ $preco";
    ?>
</div>
</body>
</html>
