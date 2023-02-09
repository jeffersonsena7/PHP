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
    print_r($v);
    array_unshift($v, "j"); //coloca um elemento no inicio, para apagar esse elemento no icicio so colocar array_shift
    print_r($v);
    ?>
  </pre>
</div>
</body>
</html>