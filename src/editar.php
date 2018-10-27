<?php?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Editar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/edit.js"></script>
</head>
<body onload="byId(<?php echo $_GET['id'] ?>)">

    <fieldset>
    <legend>Editar Consulente</legend>
        <form action="controller/ConsulenteController.php?acao=editar" method="post">
            <input type="hidden" name="idConsulente"/>
            Caso Nab:<br>
                <input type="text" name="CasoNAB_idCasoNAB"><br><br>
            Nome Consulente:<br>
                <input type="text" name="NomeConsulente"><br><br>
            Tipo Consulente:<br>
                <input type="text" name="TipoConsulente"><br><br>
            Email:<br>
                <input type="text" name="Email"><br><br>
            Endereco:<br>
                <input type="text" name="Endereco"><br><br>
            Cep:<br>
                <input type="text" name="Cep"><br><br>
            Telefone Fixo:<br>
                <input type="text" name="TelefoneFix"><br><br>
            Telefone Celular:<br>
                <input type="text" name="TelefoneCelular"><br><br>
                <input type="submit" value="Salvar">
        </form> 
    </fieldset>
    
</body>
</html>