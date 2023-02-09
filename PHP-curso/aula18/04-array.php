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
    $v = array(
      0 => 4,
      1 => 8,
      2 => 9,
      3 => 7
    );
    unset($v[3]); //apagando o vetor 3
    print_r($v);
    ?>
  </pre>
</div>
</body>
</html>