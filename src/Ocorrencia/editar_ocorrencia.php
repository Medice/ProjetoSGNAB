<?php
// including the database connection file
include_once("../classes/Crud.php");



$crud = new Crud();

//getting id from url
$idOcorrencia = $crud->escape_string($_GET['id']);

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM ocorrencia WHERE idOcorrencia = $idOcorrencia");

foreach($result as $res) {

    $idOcorrencia = $res['idOcorrencia'];
	$nomeocorrencia = $res['NomeOcorrencia'];
	$descrisao = $res['Descricao'];


}
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
            <a class="navbar-brand" href="../index.php">
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
                    <li><a href="vizualizar_ocorrencia.php"><span class="glyphicon glyphicon-plane"></span> Ocorrencia</a></li>
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

            <div id="main" class="container-fluid">
       <h3 class="page-header">Editar Hístorico</h3>
       
       </div>    

                    <div id="msg"></div>
                    <!--<form
                     action="add.php" method="post" name="form1" onsubmit = "return(validate());">-->
                    
                
<form  action="editar_postocorrencia.php" method="post" name="form1">


<div class="form-group col-md-6">

      <label >Nome:</label>
      
      <input type="text" class="form-control"  name="nomeocorrencia" value="<?php echo $nomeocorrencia;?>">
      
    </div>
    
    <div class="form-group col-md-9">
    
      <label for="email">Tipo Historico:</label>
      
     
      <textarea rows="5"  name="descrisao"  class="form-control" ><?php echo $descrisao;?></textarea>    
      
    </div>
    
             
    <div class="col-md-12">
    
    <input type="hidden" name="idOcorrencia" value=<?php echo $_GET['id'];?>>
    
      <button type="submit" name="update" value="Update" class="btn btn-primary">Atualizar</button>
      
      <a href="vizualizar_ocorrencia.php" class="btn btn-default">Cancelar</a>
      
    </div>
    

  </form> 
</div>
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



