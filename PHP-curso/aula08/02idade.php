<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nome = $_GET["nome"];
        $ano = $_GET["ano"];
        $sexo = $_GET["sexo"];
        $idade = date("Y") - $ano; //date 'Y' mostra o ano atual
        echo "$nome e $sexo tem $idade anos.";
    ?>
    <a href="02exercicio.html">Voltar</a>
</div>
</body>
</html>
 