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
        $av1 = isset($_GET["nota1"])?$_GET["nota1"]:0;
        $av2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $m = ($av1+$av2)/2;
        echo "Sua nota em av1 foi: $av1 <br/> Sua nota em av2 foi: $av2 <br/> 
Sua media foi: $m <br/>";
        if($m<5){
            $aluno = "reprovado SE LASCOU";
        }
        elseif($m>=5 && $m<7){
            $aluno = "Recuperação ESTUDE";
        }
        else{
            $aluno = "aprovado PARABENS!!!";
        }
        echo "Você esta $aluno";
    ?>
</div>
</body>
</html>
 