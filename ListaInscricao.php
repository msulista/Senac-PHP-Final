<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 30/11/2014
 * Time: 15:47
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt">
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
    require("conecta.inc");

    $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <h3>Lista Inscrições:</h3>
            <table class="table table-condensed">
                <tr>
                    <td>Inscrição</td>
                    <td>Competidor</td>
                    <td>Campeonato</td>
                </tr>

                <?PHP

                $resultado = mysqli_query($link, "select id_inscricao, nomeAtirador, nome from inscricao, competidor, campeonato
                                                    where 	inscricao.id_champ = campeonato.id_champ
                                                    and		inscricao.id_competidor = competidor.id_competidor
                                                    group by nomeAtirador, nome;");

                while($linha= mysqli_fetch_array($resultado)){

                    $matri = $linha["id_inscricao"];
                    $nomeAtirador = $linha["nomeAtirador"];
                    $nomeChamp = $linha["nome"];
                    ?>
                    <tr>
                        <td><?PHP echo($matri);?></td>
                        <td><?PHP echo($nomeAtirador);?></td>
                        <td><?PHP echo($nomeChamp);?></td>
                    </tr>
                <?PHP
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>