<?PHP
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt">
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

    $result = mysqli_query($link, "select * from campeonato where id_champ='$matri'")
    or die ("Não é possível retornar dados do campeonato");
    $linha = mysqli_fetch_array($result);
    $id_champ = $linha['id_champ'];
    $data = $linha['data'];
    $hora = $linha['hora'];
    $local = $linha['local'];
    $nome = $linha['nome'];
    $valor = $linha['valor'];
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <h2>Alterando dados do campeonato</h2>
            <br>
            <form class="form-horizontal" action="ConfirmAlterCampeonato.php" method="post">
                <h3>Dados do Campeonato:</h3>
                <div class="control-group">
                    <label class="control-label" for="inputNome">Nome:</label>
                    <div class="controls">
                        <input type="text" name="nome" id="inputNome" value="<?PHP echo($nome);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputData">Data:</label>
                    <div class="controls">
                        <input type="Date" name="data" id="inputData" value="<?PHP echo($Data);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputHora">Hora:</label>
                    <div class="controls">
                        <input type="time" name="hora" id="inputHora" value="<?PHP echo($hora);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputLocal">Local:</label>
                    <div class="controls">
                        <input type="text" name="Local" id="inputLocal" value="<?PHP echo($local);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputValor">Valor:</label>
                    <div class="controls">
                        <input type="text" name="valor" id="inputValor" value="<?PHP echo($valor);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="hidden" name="cod_alt" value="<?PHP print($matri)?>">
                        <button type="submit" class="btn">Alterar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>