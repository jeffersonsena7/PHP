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
    $vetor[0] = "curso";
    $vetor[1] = "em";
    $vetor[2] = "video";
    $texto = implode("#", $vetor);//para juntar as palavras do vetor separado por # e outra palavra que vc pode usar é o join() no lugar de implode
    print($texto)
    ?>
</div>
</body>
</html>
 