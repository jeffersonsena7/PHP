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
    $t = "Aqui esta um texto grande para fazer a quebra de linha com < br > e \ n para quebrar no codigo de inspeção";
    $r = wordwrap($t, 20, "<br>\n", true);
    echo $r;
    ?>
</div>
</body>
</html>