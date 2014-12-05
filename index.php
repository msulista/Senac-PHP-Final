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
        require("Topo.html");
    ?>
    <div class="row-fluid">
        <div class="span2">
            <!--conteúdo da lateral-->
        </div>
        <div class="span10">
            <!--conteúdo do corpo-->
            <h3>Trabalho de Programação para Internet I</h3>
            </br>

            <img src="img/download.jpg" class="img-rounded">
            </br>
            </br>

            <p class="lead">
                Este sistema trata de um um cadastro de competidores, competições e gerência a pontuação de compeonatos
                da <a href="http://portal.fgct.com.br/">FGCT</a> (Federação Gaúcha de Caça e Tiro) por competidores, assim podemos conferir a tabela com a pontuação <br>
                de cada competidor por campeonato e o ranking geral.
                Para facilitar optamos por ter apenas uma modalidade de competição, que é o tiro ao prato com espingarda calibre 12 estilo Fossa.
            </p>
            <p class="lead">
                O sistema de pontuação consiste em dividir 25 disparos em 5 tiros por baia, onde o competidor ira realizar seus disparos nos pratos e a cada acerto
                será contabilizado o ponto, podendo assim o mesário marcar no sistema o disparo positivo. O competidor ao percorrer as 5 baias terá completado sua
                participação no campeonato.
            </p>
            <p class="lead">
                O Código esta disponível no Github: <a href="https://github.com/msulista/Senac-PHP-Final">msulista</a>
            </p>
                <h3>Integrantes:</h3>
                <h4>Abilio Fernandes</h4>
                <h4>Marcus Rodrigues</h4>
                <h4>Vinicius Medeiros</h4>

                <h3>Modelo ER:</h3>

                <img src="img/ERFinal.jpg" class="img-rounded">
        </div>
    </div>
</div>
</body>
</html>