
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/edit.js"></script>
    <script rel="stylesheet"  type="text/css" src="./js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
</head>
<body onload="byId(<?php echo $_GET['id'] ?>)">

<div class="row">
				
				<div class="col-sm-4"></div>
			<div class="col-sm-4">

    <fieldset>
    <legend>Editar Consulente</legend>
        <form action="controller/ConsulenteController.php?acao=editar" method="post">
            <input type="hidden" name="idConsulente"/>
            <div class="form-group">
            Caso Nab:<br>
                <input type="text"  class="form-control" name="CasoNAB_idCasoNAB"><br><br>
</div>
            Nome Consulente:<br>
                <input type="text"  class="form-control" name="NomeConsulente"><br><br>
            Tipo Consulente:<br>
                <input type="text" class="form-control" name="TipoConsulente"><br><br>
            Email:<br>
                <input type="text" class="form-control" name="Email"><br><br>
            Endereco:<br>
                <input type="text" class="form-control" name="Endereco"><br><br>
            Cep:<br>
                <input type="text" class="form-control" name="Cep"><br><br>
            Telefone Fixo:<br>
                <input type="text" class="form-control" name="TelefoneFix"><br><br>
            Telefone Celular:<br>
                <input type="text"  class="form-control" name="TelefoneCelular"><br><br>
                <input type="submit" class="btn btn-default" value="Salvar">
        </form> 
    </fieldset>
</div>
</div>
    
</body>
</html>