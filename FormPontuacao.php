<?php
/**
 * Created by PhpStorm.
 * User: marcus.rodrigues
 * Date: 30/11/2014
 * Time: 20:19
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de pontuação</title>
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
            <h3>Tabela de pontuação</h3>
            <form action="CadastraPontuacao.php" method="post">
                <table class="table table-bordered">
                    <tr>
                        <td>Nome do competidor</td>
                        <td colspan="5">Posto 1</td>
                        <td colspan="5">Posto 2</td>
                        <td colspan="5">Posto 3</td>
                        <td colspan="5">Posto 4</td>
                        <td colspan="5">Posto 5</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="atirador1">
                                <option value=''>Escolha um competidor</option>
                                <?php
                                $result1 = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                                or die ("Não é possível consular competidor");
                                while($linha = mysqli_fetch_array($result1)){

                                    $id_competidor = $linha["id_competidor"];
                                    $nome = $linha["nomeAtirador"];
                                    print("<option value='$id_competidor'> $nome </option>");
                                }
                                ?>
                            </select>
                        </td>
                        <td>1<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto1[]" value="1"></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="atirador2">
                                <option value=''>Escolha um competidor</option>
                                <?php
                                $result2 = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                                or die ("Não é possível consular competidor");
                                while($linha = mysqli_fetch_array($result2)){

                                    $id_competidor = $linha["id_competidor"];
                                    $nome = $linha["nomeAtirador"];
                                    print("<option value='$id_competidor'> $nome </option>");
                                }
                                ?>
                            </select>
                        </td>
                        <td>1<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto2[]" value="1"></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="atirador3">
                                <option value=''>Escolha um competidor</option>
                                <?php
                                $result3 = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                                or die ("Não é possível consular competidor");
                                while($linha = mysqli_fetch_array($result3)){

                                    $id_competidor = $linha["id_competidor"];
                                    $nome = $linha["nomeAtirador"];
                                    print("<option value='$id_competidor'> $nome </option>");
                                }
                                ?>
                            </select>
                        </td>
                        <td>1<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto3[]" value="1"></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="atirador4">
                                <option value=''>Escolha um competidor</option>
                                <?php
                                $result4 = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                                or die ("Não é possível consular competidor");
                                while($linha = mysqli_fetch_array($result4)){

                                    $id_competidor = $linha["id_competidor"];
                                    $nome = $linha["nomeAtirador"];
                                    print("<option value='$id_competidor'> $nome </option>");
                                }
                                ?>
                            </select>
                        </td>
                        <td>1<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto4[]" value="1"></td>
                    </tr>
                    <tr>
                        <td>
                            <select name="atirador5">
                                <option value=''>Escolha um competidor</option>
                                <?php
                                $result5 = mysqli_query($link, "Select * from competidor order by nomeAtirador;")
                                or die ("Não é possível consular competidor");
                                while($linha = mysqli_fetch_array($result5)){

                                    $id_competidor = $linha["id_competidor"];
                                    $nome = $linha["nomeAtirador"];
                                    print("<option value='$id_competidor'> $nome </option>");
                                }
                                ?>
                            </select>
                        </td>
                        <td>1<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>1<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>2<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>3<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>4<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                        <td>5<br/><input type="checkbox" name="atiraPonto5[]" value="1"></td>
                    </tr>
                </table>
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
</html