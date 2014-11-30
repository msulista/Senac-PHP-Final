
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
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
    $del = $_POST['cod_del'];
    require("conecta.inc");

    $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");

    $result = mysqli_query($link, "delete from campeonato where id_champ='$del'")
    or die ("Não é possível deletar campeonato");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->


        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <?PHP
                echo("<h2>Campeonato deletado com sucesso!</h2>");
            ?>
        </div>
    </div>
</div>
</body>
</html>