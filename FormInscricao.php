<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 30/11/2014
 * Time: 15:13
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
            <form class="form-horizontal" action="CadastraInscri.php" method="post">
                <h3>Inscrição:</h3>

                <div class="control-group">
                    <label class="control-label" for="inputCity">Campeonato</label>
                    <div class="controls">
                        <select name="champ">
                            <option value=''> </option>
                            <?php
                            $resultado = mysqli_query($link, "Select * from campeonato order by nome;")
                            or die ("Não é possível consular Campeonato");

                            while($linha = mysqli_fetch_array($resultado)){

                                $id_champ = $linha["id_champ"];
                                $nome = $linha["nome"];
                                print("<option value='$id_champ'> $nome </option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCity">Competidor</label>
                    <div class="controls">
                        <select name="competidor">
                            <option value=''> </option>
                            <?php
                            $resultCompetidor = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                            or die ("Não é possível consular Competidor");

                            while($linhaCompetidor = mysqli_fetch_array($resultCompetidor)){

                                $id_competidor = $linhaCompetidor["id_competidor"];
                                $nomeCompetidor = $linhaCompetidor["nomeAtirador"];
                                print("<option value='$id_competidor'> $nomeCompetidor </option>");
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>