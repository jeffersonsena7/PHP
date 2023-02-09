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
      $n = array ("nome" => "Jefferson",
                  "idade" => "33",
                  "altura" => "1.80");
      foreach($n as $k => $c){
      echo "O campo $k possui o conteudo $c <br>";
      }
    ?>
  </pre>
</div>
</body>
</html>