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
    $nome = "Jefferson";
    $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
    echo "Meu amigo $novo é lindo"; // o nome com + 30 espaço em branco
    ?>
</div>
</body>
</html>