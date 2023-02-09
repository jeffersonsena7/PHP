<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <form action="exercicio3.php" method="get">
    <select name="fator" id="fator">
      <?php
      $i = 1;
      while($i <= 10){
      echo "<option value='$i'>$i</option>";
      echo $i++;
      }
      ?>
      <input type="submit" value="resultado">
    </select>
  </form>
    <?php
    $fator = isset($_GET["fator"]) ? $_GET["fator"] : 1;
    echo "<br><br>Mastrar a tabuada do $fator";
    $cont = 1;
    do {
      echo "<br> $fator x $cont = " . ($fator * $cont);
      $cont++;
    } while ($cont <= 10);
    ?>
</div>
</body>
</html>