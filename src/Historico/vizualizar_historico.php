<?php
//including the database connection file
include_once("../classes/Crud.php");

$crud = new Crud();

$Codigonab = $crud->escape_string($_GET['id']);

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM historico Where CasoNAB_idCasoNAB = '$Codigonab'";
$result = $crud->getData($query);
//echo '<pre>'; print_r($result); exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script rel="stylesheet"  type="text/css" src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/index.css" />
<script type="text/javascript">
                function validate() {
                    if (document.form1.name.value == '') {
                        alert('Please provide your name');
                        document.form1.name.focus();                
                        return false;
                    }
                    if (document.form1.email.value == '') {
                        alert('Please provide your email');
                        document.form1.email.focus();
                        return false;
                    }
                    return true;
                }
            </script>

</head>
<body>


<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
            MENU
            </button>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                SGNAB
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
           
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>      
<div class="container-fluid main-container">
          <div class="col-md-2 sidebar">
              <div class="row">
    <!-- uncomment code for absolute positioning tweek see top comment in css -->
    <div class="absolute-wrapper"> </div>
    <!-- Menu -->
    <div class="side-menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
                    <li><a href="../Ocorrencia/vizualizar_ocorrencia.php"><span class="glyphicon glyphicon-plane"></span> Ocorrencia</a></li>
					<li><a href="../consulente.php"><span class="glyphicon glyphicon-cloud"></span> Consulente</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

    </div>
</div>          

</div>

       
<div class="container">

<a href="../index.php">Voltar a Tela Principal</a><br/><br/>

    <table  class="table table-striped" cellspacing="0" cellpadding="0">
    <thead>
      <tr bgcolor='#3d78af'>
      <th>Codigo do Histórico</th>
      <th>Codigo Nab</th>
        <th>Tipo Histórico</th>
        <th>Data da Emissao</th>
        <th>Descrisão</th>
        <th>Operações</th>
        <th>Operações</th>
      </tr>
    </thead>
    <tbody>
    <?php
foreach ($result as $key => $res) {
    //while($res = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>" . $res['idHistorico'] . "</td>";
    echo "<td>" . $res['CasoNAB_idCasoNAB'] . "</td>";
    echo "<td>" . $res['TipoHistorico'] . "</td>";
    echo "<td>" . $res['DataEmissao'] . "</td>";
    echo "<td>" . $res['Descricao'] . "</td>";
    echo "<td><a class='btn btn-warning btn-xs1' href=\"editar_historico.php?id=$res[idHistorico]\">Editar</a></td>";
    echo "<td><a class='btn btn-danger btn-xs1' href=\"deletar_historico.php?Codhistorico=$res[idHistorico]\" onClick=\"return confirm('Tem certeza que deseja deletar?')\">Deletar</a></td>";


}


?>
   </tbody>
  </table>
</div>


           <footer class="pull-left footer">
              <p class="col-md-12">
                  <hr class="divider">
                  Copyright &COPY; 2018 <a href="http://www.pingpong-labs.com">Médice Bruno</a>
              </p>
          </footer>
      </div>
  
</body>
</html>





