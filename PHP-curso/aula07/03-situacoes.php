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
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m= ($nota1+$nota2)/2;
        echo "A media entre nota $nota1 e $nota2 é: $m";
        $total = ($m < 6)?"REPROVADO":"APROVADO";
        echo "<br/>O aluno foi $total";
    ?>
</div>
</body>
</html>
 