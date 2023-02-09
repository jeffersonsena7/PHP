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
    $n = isset($_GET["valor"]) ? $_GET["valor"] : 1;
    for($e = 1; $e <= 10; $e++){
      $r = $n * $e;
      echo "$n x $e = $r <br>"; 
    }
    ?>
    <a href="exercicio02.php">Voltar ao inicio</a>
</div>
</body>
</html>