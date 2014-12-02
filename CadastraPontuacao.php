<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 01/12/2014
 * Time: 20:07
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de Pontuação</title>
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

            $somaPontoAtirador1 = 0;
            $somaPontoAtirador2 = 0;
            $somaPontoAtirador3 = 0;
            $somaPontoAtirador4 = 0;
            $somaPontoAtirador5 = 0;

            $atirador1 = $_POST['atirador1'];
            $atirador2 = $_POST['atirador2'];
            $atirador3 = $_POST['atirador3'];
            $atirador4 = $_POST['atirador4'];
            $atirador5 = $_POST['atirador5'];


                    if(isset($_POST["atiraPonto1"])){

                        foreach($_POST["atiraPonto1"] as $pontosAtirador1)
                        {
                           $somaPontoAtirador1 = $somaPontoAtirador1 + $pontosAtirador1;

                        }
                    }
                    if(isset($_POST["atiraPonto2"])){

                        foreach($_POST["atiraPonto2"] as $pontosAtirador2)
                        {
                            $somaPontoAtirador2 = $somaPontoAtirador2 + $pontosAtirador2;

                        }
                    }
                    if(isset($_POST["atiraPonto3"])){

                        foreach($_POST["atiraPonto3"] as $pontosAtirador3)
                        {
                            $somaPontoAtirador3 = $somaPontoAtirador3 + $pontosAtirador3;

                        }
                    }
                    if(isset($_POST["atiraPonto4"])){

                        foreach($_POST["atiraPonto4"] as $pontosAtirador4)
                        {
                            $somaPontoAtirador4 = $somaPontoAtirador4 + $pontosAtirador4;

                        }
                    }
                    if(isset($_POST["atiraPonto5"])){

                        foreach($_POST["atiraPonto5"] as $pontosAtirador5)
                        {
                            $somaPontoAtirador5 = $somaPontoAtirador5 + $pontosAtirador5;

                        }
                    }
            echo("Atirador $atirador1 fez: $somaPontoAtirador1 <br/>");
            echo("Atirador $atirador2 fez: $somaPontoAtirador2 <br/>");
            echo("Atirador $atirador3 fez: $somaPontoAtirador3 <br/>");
            echo("Atirador $atirador4 fez: $somaPontoAtirador4 <br/>");
            echo("Atirador $atirador5 fez: $somaPontoAtirador5 <br/>");

                 require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

                $resultado = mysqli_query($link, "insert into pontuacao(id_champ, id_competidor, pontuacao)
                                        values('aaa','','')")
                or die("Não é possível inserir competidor.");
                echo("<br><h2>Competidor $nome inserido com sucesso.</h2>");

            ?>
        </div>
    </div>
    </div>


</body>
</html>