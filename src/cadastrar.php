<?php?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <fieldset>
    <legend>Cadastro Consulente</legend>
        <form action="controller/ConsulenteController.php?acao=salvar" method="post">
            Caso Nab:<br>
                <input type="text" name="casoNab"><br><br>
            Nome Consulente:<br>
                <input type="text" name="nome"><br><br>
            Tipo Consulente:<br>
                <input type="text" name="tipo"><br><br>
            Email:<br>
                <input type="text" name="email"><br><br>
            Endereco:<br>
                <input type="text" name="endereco"><br><br>
            Cep:<br>
                <input type="text" name="cep"><br><br>
            Telefone Fixo:<br>
                <input type="text" name="fixo"><br><br>
            Telefone Celular:<br>
                <input type="text" name="celular"><br><br>
                <input type="submit" value="Salvar">
        </form> 
    </fieldset>
    
</body>
</html>