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
    $frase = "Gosto de estudar Matematica";
    $novafrase = str_replace("Matematica", "PHP", $frase); 
    echo $novafrase; //altera a palavra ou frase 
    /* se vc colocar o i em replace, assim => str_ireplace
    ele vai iguinorar letra maiuscula e vai entender que é
    o mesmo Matematica.*/
    ?>
</div>
</body>
</html>