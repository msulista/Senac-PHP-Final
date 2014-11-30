<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 30/11/2014
 * Time: 15:27
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de atiradores</title>
</head>

<body>
<div class="container-fluid">
    <?PHP
    require("Topo.html");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->


        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <?PHP

            $champ = $_POST['champ'];
            $competidor = $_POST['competidor'];

            echo("Competidor: $competidor - Campeonato: $champ");


            if($champ == '' or $competidor == ''){

                print("Favor preencher todos os campos.");
            }else{

                require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");
                $resultado = mysqli_query($link, "insert into inscricao(id_competidor, id_champ)
                                    values('$competidor', '$champ')")
                or die("Não é possível realizar inscrição.");
                echo("<br><h2>Inscrição do competidor realizada com sucesso.</h2>");
            }
            ?>
        </div>
    </div>
</div>



</body>
</html>