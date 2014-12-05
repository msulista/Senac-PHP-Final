
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de Campeonato</title>
</head>

<body>
<div class="container-fluid">
    <?PHP
    require("Topo.html");
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->


        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <?PHP

            $nome = $_POST['nome'];
            $data = $_POST['data'];
            $hora = $_POST['hora'];
            $local = $_POST['local'];
            $valor = $_POST['valor'];


            if($nome == '' or $data == '' or $hora == '' or $local == '' or $valor ==''){
                print("Favor preencher todos os campos.");
            }else{

                require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");
                $resultado = mysqli_query($link, "insert into campeonato(nome, local, data, hora, valor)
                                    values('$nome', '$local', '$data', '$hora', '$valor')")
                or die("Não é possível inserir o campeonato.");
                echo("<br><h2>Campeonato $nome inserido com sucesso.</h2>");
            }
            ?>
        </div>
    </div>
</div>



</body>
</html>