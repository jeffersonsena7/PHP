<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <form action="02-tabuada.php" method="get">
    <select name="valor" id="valor">
      <?php
        
        for($i = 1; $i <= 10; $i++){
      echo "<option value='$i'>$i</option>";
      }
      ?>
      <input type="submit" value=  "Resultado">
    </select>
  </form>
</div>
</body>
</html>