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
    $frase = "Estou aprendendo PHP";
    $sub = substr($frase, 0, 5);
    echo "$sub";
    ?>
</div>
</body>
</html>