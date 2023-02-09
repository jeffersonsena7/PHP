<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<p>Realizar uma soma com múltiplos parâmetros</p>
<div>
    <?php
    function soma() {
      $p = func_get_args(); //pega todos os numeros  e coloca dentro de um vetor
      $t = func_num_args(); //vai retornar o número de argumento dentro do vetor
      $s = 0;
      for($i = 0; $i < $t; $i++){
        $s = $s + $p[$i];
      }
      return $s;
     } 
       $r = soma(3, 5, 2, 6, 8);
       echo "A soma dos valores é $r";
    ?>
</div>
</body>
</html>