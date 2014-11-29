
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    ?>

    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->


        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <?PHP

            $nome = $_POST['nome'];
            $fone = $_POST['fone'];
            $email = $_POST['email'];
            $rua = $_POST['rua'];
            $num = $_POST['numero'];
            $cep = $_POST['cep'];
            $city = $_POST['city'];

            if($nome == '' or $fone == '' or $email == '' or $rua == '' or $num =='' or $cep == '' or $city ==''){

                print("Favor preencher todos os campos.");
            }else{

                require("conecta.inc");

                $link = conecta_bd() or die ("Não é possível conectar-se ao servidor");
                $resultado = mysqli_query($link, "insert into competidor(nome, telefone, email, rua, cep, num_endereco, id_cidade)
                                    values('$nome', '$fone', '$email', '$rua', '$cep', '$num', '$city')")
                or die("Não é possível inserir competidor.");
                echo("<br><h2>Competidor $nome inserido com sucesso.</h2>");
            }
            ?>
        </div>
    </div>
</div>



</body>
</html>