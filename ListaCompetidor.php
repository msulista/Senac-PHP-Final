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

    $resultado = mysqli_query($link, "Select * from competidor order by nome;");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <table class="table table-condensed">
                <tr>
                    <td>Matrícula</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                    <td>Editar</td>
                    <td>Inscrever</td>
                </tr>

                <?PHP

                while($linha= mysqli_fetch_array($resultado)){

                    $matri = $linha["id_competidor"];
                    $nome = $linha["nome"];
                    $email = $linha["email"];
                    $telefone = $linha["telefone"];
                    ?>
                    <tr>
                        <td><?PHP echo($matri);?></td>
                        <td><?PHP echo($nome);?></td>
                        <td><?PHP echo($email);?></td>
                        <td><?PHP echo($telefone);?></td>
                        <td><?PHP echo("<a href='alteraCompetidor.php?matri=$matri'>Alterar</a>");?></td>
                        <td><?PHP echo("<a href='deletaCompetidor.php?matri=$matri'>Deletar</a>");?></td>
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