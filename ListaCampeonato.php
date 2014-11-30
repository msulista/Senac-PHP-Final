<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de campeoanto</title>
</head>

<body>
<div class="container-fluid">

    <?PHP
    require("Topo.html");
    require("conecta.inc");

    $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

    $resultado = mysqli_query($link, "Select * from campeonato order by nome;");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <table class="table table-condensed">
                <tr>
                    <td>Nome</td>
                    <td>Local</td>
                    <td>Data</td>
                    <td>Hora</td>
                    <td>Valor</td>
                    <td>Alterar</td>
                    <td>Deletar</td>
                </tr>

                <?PHP

                while($linha= mysqli_fetch_array($resultado)){

                    $matri = $linha["id_champ"];
                    $nome = $linha["nome"];
                    $data = $linha["data"];
                    $hora = $linha["hora"];
                    $local = $linha["local"];
                    $valor = $linha["valor"];

                    $data = date("d/m/Y", strtotime($data));
                    $hora = date("h:i:s", strtotime($hora));
                    ?>
                    <tr>
                        <td><?PHP echo($nome);?></td>
                        <td><?PHP echo($local);?></td>
                        <td><?PHP echo($data);?></td>
                        <td><?PHP echo($hora);?></td>
                        <td><?PHP echo($valor);?></td>
                        <td><?PHP echo("<a href='alteraCampeonato.php?matri=$matri'>Alterar</a>");?></td>
                        <td><?PHP echo("<a href='deletaCampeonato.php?matri=$matri'>Deletar</a>");?></td>
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