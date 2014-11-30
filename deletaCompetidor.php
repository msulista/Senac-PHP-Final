<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 24/11/2014
 * Time: 17:09
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt-br">
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

        $matri = $_GET['matri'];
        require("conecta.inc");

        $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

        $result = mysqli_query($link, "select * from competidor where id_competidor='$matri'")
                        or die ("Não é possível retornar dados do competidor");
        $linha = mysqli_fetch_array($result);
        $id_comp = $linha['id_competidor'];
        $num_end = $linha['num_endereco'];
        $email = $linha['email'];
        $telefone = $linha['telefone'];
        $nome = $linha['nomeAtirador'];
        $rua = $linha['rua'];
        $cep = $linha['cep'];
        $city = $linha['id_cidade'];
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->

            <h3>Deletando competidor</h3>
            <form class="form-horizontal" action="ConfirmDelCompetidor.php" method="post">
            <div class="control-group">
                <label class="control-label" for="inputNome">Nome:</label>
                <div class="controls">
                    <?PHP echo("<p>$nome</p>");?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputFone">Telefone:</label>
                <div class="controls">
                    <?PHP echo($telefone);?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">E-mail:</label>
                <div class="controls">
                    <?PHP echo($email);?>
                </div>
            </div>

            <h3>Endereço:</h3>

            <div class="control-group">
                <label class="control-label" for="inputRua">Rua:</label>
                <div class="controls">
                    <?PHP echo($rua)?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputNum">Numero:</label>
                <div class="controls">
                    <?PHP echo($num_end);?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputCep">CEP:</label>
                <div class="controls">
                    <?PHP echo($cep);?>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputCity">Cidade:</label>
                <div class="controls">
                    <?php
                    $result = mysqli_query($link, "select * from cidade where id_cidade='$city'")
                    or die ("Não é possível retornar dados dcidade");
                    $linha = mysqli_fetch_array($result);
                    $id_cidade = $linha["id_cidade"];
                    $cidade = $linha["cidade"];
                    echo("<p>$cidade</p>");
                    ?>
                </div>
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