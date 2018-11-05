<?php
//including the database connection file
//include_once("../sessao.php");
include_once("./CasoNAB/configuracao.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM CasoNAB ORDER BY idCasoNAB DESC"); // using mysqli_query instead
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script rel="stylesheet"  type="text/css" src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/index.css" />
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
			<a class="navbar-brand" href="index.php">
				SGNAB
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			<form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form>
			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
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
					<li><a href="./Ocorrencia/vizualizar_ocorrencia.php"><span class="glyphicon glyphicon-plane"></span> Ocorrencia</a></li>
					<li><a href="consulente.php"><span class="glyphicon glyphicon-cloud"></span> Consulente</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			  
               
                <div class="panel-body">


                <div class="jumbotron text-center">
        <h1>Caso Nab</h1>
      </div>
       
      <div class="col-md-4">

<a href="./casoNAB/add.php">Add Novo CasoNAB</a><br/><br/>

<table class="table" width='80%' border=0>
    
    <tr bgcolor='#3d78af'>
    	<td>idCasoNAB</td>
    	<td>Ocorrencia_idOcorrencia</td>
    	<td>Posto_idPosto</td>
    	<td>NomeCasoNAB</td>
    	
    	<td>Email</td>
    	<td>DadosComplementares</td>
		<td>DataCadastro</td>
		<td>Operações</td>
    </tr>
    <?php 
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
    while($res = mysqli_fetch_array($result)) {
    	echo "<tr>";
    	echo "<td>".$res['idCasoNAB']."</td>";
    	echo "<td>".$res['Ocorrencia_idOcorrencia']."</td>";
    	echo "<td>".$res['Posto_idPosto']."</td>";
    	echo "<td>".$res['NomeCasoNAB']."</td>";
   
    	echo "<td>".$res['Email']."</td>";
    	echo "<td>".$res['DadosComplementares']."</td>";
    	echo "<td>".$res['DataCadastro']."</td>";
        echo "<td> <a href=./Historico/Adicionar_historico.php?id=$res[idCasoNAB]>Cadastrar Histótico</a> </td>"; 
        echo "<td>  <a href=./Historico/vizualizar_historico.php?id=$res[idCasoNAB]>Visualizar Histótico</a></td>"; 
        echo "<td><a href=./CasoNAB/editnab.php?id=$res[idCasoNAB]>Edit</a></td>"; 
        echo "<td><a href=./CasoNAB/delete.php?id=$res[idCasoNAB] onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

    }
    ?>
</table>
</div>



	
</div>
      </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<footer class="pull-left footer">
<p class="col-md-12">
	<hr class="divider">
	Copyright &COPY; 2018 <a href="http://www.pingpong-labs.com">Médice Bruno</a>
</p>
</footer>
  	</div>
  
</body>
</html>



  
