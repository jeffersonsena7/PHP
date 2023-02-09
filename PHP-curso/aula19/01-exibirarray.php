<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
    $v = array("a", "b", "c");
    array_push($v, "d", "e"); //adiciona um elemento
    //array_pop($V); apaga um elemento
    $c = count($v);
    echo "O vetor tem $c elementos <br>";
    print_r($v);
    ?>
  </pre>
</div>
</body>
</html>