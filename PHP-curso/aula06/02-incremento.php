<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
<div>
    <?php
    /* Testando decremento e incremento, pre e pós de
        cada ano digitado na URL*/
        $atual = $_GET["aa"];  // Essa linha vai pegar o valor na URL
        echo "O ano atual é $atual e o ano anteior é ". --$atual;
    ?>
</div>
</body>
</html>
