
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <title>Cadastro de atiradores</title>
</head>

<body>
<div class="container-fluid">
    <?PHP
    /**
     * Created by PhpStorm.
     * User: marcus.rodrigues
     * Date: 09/11/2014
     * Time: 10:43
     */
    require("Topo.html");
            $cod_alt = $_POST['cod_alt'];
            $nome_alt = $_POST['nome'];
            $fone_alt = $_POST['fone'];
            $email_alt = $_POST['email'];
            $rua_alt = $_POST['rua'];
            $num_alt = $_POST['numero'];
            $cep_alt = $_POST['cep'];
            $city_alt = $_POST['city'];

            if($nome_alt == '' or $fone_alt == '' or $email_alt == '' or $rua_alt == '' or $num_alt =='' or $cep_alt == '' or $city_alt ==''){

                print("Favor preencher todos os campos.");
            }else{

                require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");
                $resultado = mysqli_query($link, "update competidor set nome='$nome_alt', telefone='$fone_alt', email='$email_alt', rua='$rua_alt',
                                          cep='$cep_alt', num_endereco='$num_alt', id_cidade='$city_alt' WHERE id_competidor = '$cod_alt'")
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
                echo("<br><h2>Competidor $nome_alt alterado com sucesso.</h2>");
            ?>
        </div>
    </div>
</div>
</body>
</html>