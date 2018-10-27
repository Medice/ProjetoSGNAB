<?php?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="js/main.js"></script>
</head>
<body>

    <button><a href="cadastrar.php">Cadastrar +</a></button>
    <table style="width:100%" border=1>
        <caption>Consulentes</caption>
        <thead>
            <tr>
                <th>Id</th>
                <th>Caso NAB</th>
                <th>Nome Consulente</th>
                <th>Tipo Consulente</th>
                <th>Email</th>
                <th>Endereco</th>
                <th>Cep</th>
                <th>Telefone Fixo</th>
                <th>Telefone Celular</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="tbody"></tbody>
    </table>
    
</body>
</html>