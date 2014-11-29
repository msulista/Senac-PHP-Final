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
        ?>

      <div class="row-fluid">
        <div class="span2">
          <!--conteúdo da lateral-->
        </div>
        <div class="span10">
          <!--conteúdo do corpo-->
           <form class="form-horizontal" action="cadastraAtirador.php" method="post">
              <h3>Dados pessoais:</h3>
               <div class="control-group">
                   <label class="control-label" for="inputNome">Nome:</label>
                   <div class="controls">
                       <input type="text" name="nome" id="inputNome" placeholder="Mome" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputFone">Telefone:</label>
                   <div class="controls">
                       <input type="text" name="fone" id="inputFone" placeholder="Telefone" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputEmail">E-mail:</label>
                   <div class="controls">
                       <input type="text" name="email" id="inputFone" placeholder="E-mail" required="required">
                   </div>
               </div>

                    <h3>Endereço:</h3>

               <div class="control-group">
                   <label class="control-label" for="inputRua">Rua:</label>
                   <div class="controls">
                       <input type="text" name="rua" id="inputRua" placeholder="Rua" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputNum">Numero:</label>
                   <div class="controls">
                       <input type="text" name="numero" id="inputNum" placeholder="Numero" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputCep">CEP:</label>
                   <div class="controls">
                       <input type="text" name="cep" id="inputCep" placeholder="CEP" required="required">
                   </div>
               </div>
               <div class="control-group">
                   <label class="control-label" for="inputCity">Cidade:</label>
                   <div class="controls">
                       <select name="city">
                           <option value=''> </option>
                           <?php
                               $resultado = mysqli_query($link, "Select * from cidade order by cidade;")
                               or die ("Não é possível consular cidade");

                               while($linha = mysqli_fetch_array($resultado)){

                                   $id_cidade = $linha["id_cidade"];
                                   $cidade = $linha["cidade"];
                                   print("<option value='$id_cidade'> $cidade </option>");
                               }
                           ?>
                       </select>
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