<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso de PHP</title>
</head>
<body>
<div>
  <form action="exercicio02.php" method="get">
    <?php
    $i = 1;
    while ($i <=5) {
      echo "Valor $i : <input type='number' name='v$i' max='100' min='0' value='0'><br>";
      echo $i++;
    }
    ?>
    <input type="submit" value="Enviar" class="botao">
    </form>
    <?php
      $c = 1;
      while($c <= 5){
        $v = "num" .$c;
        $url = "v" .$c;
        $$v = isset($_GET[$url])? $_GET[$url]:0;
        $c++;
      }
     
      $c = 1;
      while($c <= 5){
        $v = "num". $c;
        echo "Valor $c :" .$$v . "<br/>";
        $c++;
     }
    ?>
</div>  
</body>
</html>