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

            <h2>Escolha ação desejada:</h2>

            <div class="row-fluid">
                <div class="span8">
                    </div>
                        <form action="FormAtirador.php">
                            <button class="btn btn-large btn-block" type="submit">Cadastro de Competidor</button>
                        </form>
                        <form action="FormCampeonato.php">
                            <button class="btn btn-large btn-block" type="submit">Cadastro de Campeonato</button>
                        </form>
                        <form action="FormInscricao.php">
                            <button class="btn btn-large btn-block" type="submit">Inscrição de Competidor no Campeonato</button>
                        </form>

                    </div>
                </div>
            </div>



    </div>
</div>
</body>
</html>