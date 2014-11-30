<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="pt">
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
           <form class="form-horizontal" action="cadastraCampeonato.php" method="post">
              <h3>Dados do campeonato:</h3>
               <div class="control-group">
                   <label class="control-label" for="inputNome">Nome:</label>
                   <div class="controls">
                       <input type="text" name="nome" id="inputNome" placeholder="Nome" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputDate">Data:</label>
                   <div class="controls">
                       <input type="date" name="data" id="inputDate" placeholder="Data" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputHora">Hora:</label>
                   <div class="controls">
                       <input type="time" name="hora" id="inputHora" placeholder="Hora" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputLocal">Local:</label>
                   <div class="controls">
                       <input type="text" name="local" id="inputLocal" placeholder="Local" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputValor">Valor:</label>
                   <div class="controls">
                       <input type="number" name="valor" min="0" max="100"  id="inputValor" placeholder="Valor" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <div class="controls">
                       <button type="submit" class="btn">Cadastrar</button>
                   </div>
               </div>
            </form>
        </div>
      </div>
    </div>
</body>
</html>