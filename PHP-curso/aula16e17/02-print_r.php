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
    $v[0] = 4;
    $v[1] = 8;
    $v[2] = 3;
    print_r($v);
    echo "<br><br>";
    $x = array(2, 3, 5, 7, 9);
    var_dump($x);
    echo "<br><br>";
    var_export($x); 
    //Os 3 moledos que pode ser usado para visualizar uma array
    ?>
</div>
</body>
</html>