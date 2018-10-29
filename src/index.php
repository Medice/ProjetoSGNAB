<?php
//including the database connection file
include_once("classes/Crud.php");

$crud = new Crud();

//fetching data in descending order (lastest entry first)
$query = "SELECT * FROM users ORDER BY Codhistorico DESC";
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
  <script rel="stylesheet"  type="text/css" src="./js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css" />


</head>
<body>




<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SGNAB</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="./Ocorrencias.html">Ocorrências</a></li>
        <li><a href="./consulente.php">Consulente</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<div class="jumbotron text-center">
        <h1>Histórico do Caso</h1>
      </div>
       

<a href="add.html">Adicionar um novo Histórico</a><br/><br/>


	<table class="table" width='80%' border=0>
    <thead>
      <tr bgcolor='#CCCCCC'>
        <th>Tipo Histórico</th>
        <th>Data da Emissao</th>
		<th>Descrisão</th>
		<th>Operações</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	foreach ($result as $key => $res) {
	//while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['Tipohistorico']."</td>";
		echo "<td>".$res['Dataemissao']."</td>";
		echo "<td>".$res['descrisao']."</td>";	
		echo "<td><a href=\"edit.php?Codhistorico=$res[Codhistorico]\">Editar</a> | <a href=\"delete.php?Codhistorico=$res[Codhistorico]\" onClick=\"return confirm('Tem certeza que deseja deletar?')\">Deletar</a></td>";		
	}
	?>
    </tbody>
  </table>
</div>


<footer class="container-fluid text-center">
<p>Feito porMedice Bruno</p>
</footer>



	
</body>
</html>



