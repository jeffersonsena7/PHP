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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i <br/>";
        if($i>=18){
            echo "Pode tirar habilitaçaõ e obrigatorio a votar <br/>";
        }
        else{
            echo "Você não pede tirar habilitação e nem pode votar";
        }
    ?>
</div>
</body>
</html>
 