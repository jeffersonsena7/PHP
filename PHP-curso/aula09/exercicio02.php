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
        if($i<16){
            $voto = "Você não vota";
        }
        elseif($i>=16 && $i<18 || $i>65){
            $voto = "Seu voto é opcional";
        }
        else{
            $voto = "Seu voto é obrigatorio";
        }

        echo "Para essa idade, $voto";
    ?>
</div>
</body>
</html>
 