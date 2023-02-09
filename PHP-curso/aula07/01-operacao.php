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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        echo "Os valores passados foram $n1 e $n2";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2; /* se R receber S na URL ele soma, se não ele multiplica
                                                '?' é o mesmo que if
                                                 ':' é o mesmo que else */
        echo "<br/>O resultado sera:  $r";
    ?>
</div>
</body>
</html>
 