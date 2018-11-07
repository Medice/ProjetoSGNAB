
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script rel="stylesheet"  type="text/css" src="./js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
</head>
<body>


<div class="row">
				
				<div class="col-sm-4"></div>
			<div class="col-sm-4">

			
            <fieldset>
            <button><a href="consulente.php">Voltar</a></button> </br></br>
    <legend>Cadastro Consulente</legend>
        <form action="controller/ConsulenteController.php?acao=salvar" method="post">
        <div class="form-group">
            Caso Nab:</br>
                <input type="text" class="form-control" name="casoNab"><br><br>
                </div>
        <div class="form-group">
            Nome Consulente:<br>
                <input type="text" class="form-control" name="nome"><br><br>
         </div>
<div class="form-group">
            Tipo Consulente:<br>
                <select name="TipoConsulente">
                    <option>Selecione</option>
                    <option value="Embaixador">Embaixador</option>
                    <option value="Oficial de Chancelaria">Oficial de Chancelaria</option>
                    <br>
                </select>
</div>
<div class="form-group">
            Email:<br>
                <input type="text" class="form-control" name="email"><br><br>
                </div>
                <div class="form-group">
            Endereco:<br>
                <input type="text" class="form-control" name="endereco"><br><br>
                </div>
                <div class="form-group">
            Cep:<br>
                <input type="text" class="form-control" name="cep"><br><br>
                </div>
                <div class="form-group">
            Telefone Fixo:<br>
                <input type="text" class="form-control" name="fixo"><br><br>
                </div>
                <div class="form-group">
            Telefone Celular:<br>
                <input type="text" class="form-control" name="celular"><br><br>
                </div>
                <input type="submit" class="btn btn-default" value="Salvar">
        </form> 
    </fieldset>

</div>
</div>



			

    
</body>
</html>