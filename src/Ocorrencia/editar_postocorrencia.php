<?php
// including the database connection file
include_once("../classes/Crud.php");
include_once("../classes/Validation.php");

$crud = new Crud();
$validation = new Validation();

if(isset($_POST['update']))
{	
	$idOcorrencia = $crud->escape_string($_POST['idOcorrencia']);
	
	$nomeocorrencia = $crud->escape_string($_POST['nomeocorrencia']);
	$descrisao = $crud->escape_string($_POST['descrisao']);
	
	
	  
		
		//updating the table
		$result = $crud->execute("UPDATE ocorrencia SET NomeOcorrencia='$nomeocorrencia',Descricao='$descrisao' WHERE idOcorrencia = $idOcorrencia");
		
		
		echo "<div class='alert alert-success' >Cadastrado!! <br/><a href='vizualizar_ocorrencia.php'>Visualizar Tabela</a> </div>";


}else{
	
	echo "<div class='alert alert-success' >Não Cadastrado!! <br/><a href='vizualizar_ocorrencia.php'>Visualizar Tabela</a> </div>";
	
}
	?>