<?PHP
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 24/11/2014
 * Time: 17:04
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
    $nome = $linha['nome'];
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
            <h2>Alterando dados do competidor</h2>
            <br>
            <form class="form-horizontal" action="ConfirmAlterCompetidor.php" method="post">
                <h3>Dados pessoais:</h3>
                <div class="control-group">
                    <label class="control-label" for="inputNome">Nome:</label>
                    <div class="controls">
                        <input type="text" name="nome" id="inputNome" value="<?PHP echo($nome);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputFone">Telefone:</label>
                    <div class="controls">
                        <input type="text" name="fone" id="inputFone" value="<?PHP echo($telefone);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">E-mail:</label>
                    <div class="controls">
                        <input type="text" name="email" id="inputFone" value="<?PHP echo($email);?>" required="required">
                    </div>
                </div>

                <h3>Endereço:</h3>

                <div class="control-group">
                    <label class="control-label" for="inputRua">Rua:</label>
                    <div class="controls">
                        <input type="text" name="rua" id="inputRua" value="<?PHP echo($rua);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputNum">Numero:</label>
                    <div class="controls">
                        <input type="text" name="numero" id="inputNum" value="<?PHP echo($num_end);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCep">CEP:</label>
                    <div class="controls">
                        <input type="text" name="cep" id="inputCep" value="<?PHP echo($cep);?>" required="required">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputCity">Cidade:</label>
                    <div class="controls">
                        <select name="city">
                            <?php
                                $result_alt = mysqli_query($link, "Select * from cidade where id_cidade = '$city';")
                                or die ("Não é possível consular cidade");
                                $linha_alt = mysqli_fetch_array($result_alt);
                                $id_cit_alt = $linha_alt["id_cidade"];
                                $cidade_alt = $linha_alt["cidade"];
                                echo("<option value='$id_cit_alt' selected>$cidade_alt</option>");

                                $resultado = mysqli_query($link, "Select * from cidade order by cidade;")
                                or die ("Não é possível consular cidade");

                                while($linha = mysqli_fetch_array($resultado)){

                                    $id_cidade = $linha["id_cidade"];
                                    $cidade = $linha["cidade"];
                                    print("<option value='$id_cidade'> $cidade </option>");
                                }
                            ?>
                        </select>
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