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
    $frase = "Estou aprendendo PHP no curso de videoPHP";
    $cont = substr_count($frase, "PHP"); //mostra quantas vezes a palavra PHP apareceu
    echo " A string foi encontrada na posição $cont";
    ?>
</div>
</body>
</html>