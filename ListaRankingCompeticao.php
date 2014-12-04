<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 02/12/2014
 * Time: 22:24
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

    $id_champ = $_POST['champ'];

    $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

    $resultado = mysqli_query($link, "select nomeAtirador, nome, pontos      from   pontuacao,
                                                                                    competidor,
                                                                                    campeonato
                                        where	  pontuacao.id_competidor = competidor.id_competidor
                                        and		  pontuacao.id_champ = campeonato.id_champ
                                        and       pontuacao.id_champ = '$id_champ'
                                        order by  pontos DESC;");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <table class="table table-condensed">
                <tr>
                    <td>Posição</td>
                    <td>Nome Competidor</td>
                    <td>Nome Competição</td>
                    <td>Pontuação</td>
                </tr>

                <?PHP

                $posicao = 1;

                while($linha= mysqli_fetch_array($resultado)){

                    $nomeAtirador = $linha["nomeAtirador"];
                    $nome = $linha["nome"];
                    $pontos = $linha["pontos"];
                    ?>
                    <tr>
                        <td><?PHP echo($posicao);?></td>
                        <td><?PHP echo($nomeAtirador);?></td>
                        <td><?PHP echo($nome);?></td>
                        <td><?PHP echo($pontos);?></td>
                    </tr>
                <?PHP
                    $posicao++;
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html