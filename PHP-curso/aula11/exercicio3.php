<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
  <style>
    body > p,h1{
      color: white;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>PHP</h1>
  <p>Usando o contado para incremento e decremento</p>
  <div>
    <form action="exercicio3.php" method="get">
      Inicio: <input type="number" name="inicio" min="0" max="100" value="0"><br>
      Final: <input type="number" name="final" min="0" max="100" value="0"><br>
      Incremento: <select name="incremento" required="">
        <?php
          $i = 1;
          while($i <=20){
          echo "<option value='$i'>$i</option>";
          echo $i++;
          }
        ?>
      </select>
      <input type="submit" value="Calcular" class="">
    </form>
      <?php
          $ini = isset($_GET["inicio"]) ? $_GET["inicio"] : 0;
          $fim = isset($_GET["final"]) ? $_GET["final"] : 0;
          $inc = isset($_GET["incremento"]) ? $_GET["incremento"] : 0;
          
      if ($ini < $fim) { /* Essa condição é para especificar que haverá uma incrementação*/
        while ($ini <= $fim) {
            echo "$ini <br>";
            $ini += $inc;
          }
        }
       else { /* essa condição é para especificar que haverá decrementação*/
        while ($ini >= $fim) {
          echo "$ini <br>";
          $ini -= $inc;
        }
      }
      ?>    
  </div>
</body>
</html>