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
    <title>Cadastro de pontos</title>
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
            <form action="##" method="post">
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
                        <td>1<br/><input type="checkbox" name="p11" ></td>
                        <td>2<br/><input type="checkbox" name="p12" ></td>
                        <td>3<br/><input type="checkbox" name="p13" ></td>
                        <td>4<br/><input type="checkbox" name="p14" ></td>
                        <td>5<br/><input type="checkbox" name="p15" ></td>
                        <td>1<br/><input type="checkbox" name="p21" ></td>
                        <td>2<br/><input type="checkbox" name="p22" ></td>
                        <td>3<br/><input type="checkbox" name="p23" ></td>
                        <td>4<br/><input type="checkbox" name="p24" ></td>
                        <td>5<br/><input type="checkbox" name="p25" ></td>
                        <td>1<br/><input type="checkbox" name="p31" ></td>
                        <td>2<br/><input type="checkbox" name="p32" ></td>
                        <td>3<br/><input type="checkbox" name="p33" ></td>
                        <td>4<br/><input type="checkbox" name="p34" ></td>
                        <td>5<br/><input type="checkbox" name="p35" ></td>
                        <td>1<br/><input type="checkbox" name="p41" ></td>
                        <td>2<br/><input type="checkbox" name="p42" ></td>
                        <td>3<br/><input type="checkbox" name="p43" ></td>
                        <td>4<br/><input type="checkbox" name="p44" ></td>
                        <td>5<br/><input type="checkbox" name="p45" ></td>
                        <td>1<br/><input type="checkbox" name="p51" ></td>
                        <td>2<br/><input type="checkbox" name="p52" ></td>
                        <td>3<br/><input type="checkbox" name="p53" ></td>
                        <td>4<br/><input type="checkbox" name="p54" ></td>
                        <td>5<br/><input type="checkbox" name="p55" ></td>
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
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
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
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
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
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
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
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>4</td>
                        <td>5</td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
</body>
</html