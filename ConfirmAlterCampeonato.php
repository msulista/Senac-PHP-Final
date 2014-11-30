
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de campeonato</title>
</head>

<body>
<div class="container-fluid">
    <?PHP
    require("Topo.html");
            $cod_alt = $_POST['cod_alt'];
            $nome_alt = $_POST['nome'];
            $data_alt = $_POST['data'];
            $hora_alt = $_POST['hora'];
            $local_alt = $_POST['local'];
            $valor_alt = $_POST['valor'];

            if($nome_alt == '' or $data_alt == '' or $hora_alt == '' or $local_alt == '' or $valor_alt ==''){

                print("Favor preencher todos os campos.");
            }else{

                require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");
                $resultado = mysqli_query($link, "update campeoanto set nome='$nome_alt', data='$data_alt', hora='$hora_alt', local='$local_alt',
                                          valor='$valor_alt' WHERE id_champ = '$cod_alt'")
                or die("Não é possível inserir competidor.");
            }
            ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->


        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <?PHP
                echo("<br><h2>Campeonato $nome_alt alterado com sucesso.</h2>");
            ?>
        </div>
    </div>
</div>
</body>
</html>