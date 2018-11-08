<?php
//including the database connection file
include_once("../classes/Crud.php");

$crud = new Crud();

//getting id of the data from url
$id_ocorrencia = $crud->escape_string($_GET['id']);



$result = $crud->deletocorrencia($id_ocorrencia, 'ocorrencia');


if ($result) {


	header("Location: vizualizar_ocorrencia.php");
}else{

	echo "<div class='alert alert-success' >Não Cadastrado!! <br/><a href='vizualizar_ocorrencia.php'>Visualizar Tabela</a> </div>";

}


?>



