<?php
//including the database connection file
include_once("../classes/Crud.php");

$crud = new Crud();

$Codigonab = $crud->escape_string($_GET['id']);


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

        <div class="row">
    

            <div class="col-sm-1"></div>
            <div class="col-sm-6">

            <div id="main" class="container-fluid"><h3 class="page-header">Adicionar Hístorico</h3></div>    
            <div id="msg"></div>
            <!--<form action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
                    
                    <form width="25%" action="inserir_historico.php" method="post" name="form1" >
                    
                        <input type="hidden" class="form-control"  name="casonab" value="<?php echo $Codigonab;?>">
                        <div class="form-group col-md-6">
                          <label for="Tipohistorico">Tipo Historico:</label>
                          <input type="text" required="required" class="form-control"  name="Tipohistorico">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="Dataemissao">Data da Emissao:</label>
                          <input type="date" required="required" class="form-control" name="Dataemissao">
                        </div>
                        <div class="form-group col-md-10">
                                <label for="descrisao">Descrisao:</label>
                                <textarea rows="5" required="required"  name="descrisao"  class="form-control" ></textarea>        
                        </div>
                        <div class="col-md-12">
                          <button type="submit" name="Submit" class="btn btn-primary">Salvar</button>
                          <a href="../index.php" class="btn btn-default">Cancelar</a>
                        </div>
                    
                    </form>
  
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


