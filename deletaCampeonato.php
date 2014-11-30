<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de campeonatos</title>
</head>

<body>
<div class="container-fluid">

    <?PHP
    require("Topo.html");

    $matri = $_GET['matri'];
    require("conecta.inc");

    $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

    $result = mysqli_query($link, "select * from campeoanto where id_champ='$matri'")
                    or die ("Não é possível retornar dados do campeoanto");
    $linha = mysqli_fetch_array($result);
    $id_champ = $linha['id_champ'];
    $nome = $linha['nome'];
    $data = $linha['data'];
    $hora = $linha['hora'];
    $local = $linha['local'];
    $valor = $linha['valor'];
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->

            <h3>Deletando campeonato</h3>
            <form class="form-horizontal" action="ConfirmDelCampeonato.php" method="post">
            <div class="control-group">
                <label class="control-label" for="inputNome">Nome:</label>
                <div class="controls">
                    <?PHP echo("<p>$nome</p>");?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputData">Data:</label>
                <div class="controls">
                    <?PHP echo($data);?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputHora">Hora:</label>
                <div class="controls">
                    <?PHP echo($hora);?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputLocal">Local:</label>
                <div class="controls">
                    <?PHP echo($local)?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputValor">Valor:</label>
                <div class="controls">
                    <?PHP echo($valor);?>
                </div>
            <div class="control-group">
                <div class="controls">
                    <input type="hidden" name="cod_del" value="<?PHP print($matri)?>">
                    <button type="submit" class="btn">Deletar</button>
                </div>
            </div>
            </form>
            <?PHP

            ?>
        </div>
    </div>
</div>
</body>
</html>