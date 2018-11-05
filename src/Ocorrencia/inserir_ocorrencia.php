<html>
<head>
	<title>Add Data</title>
	<script rel="stylesheet"  type="text/css" src="../js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
	
</head>

<body>


<?php
//including the database connection file
include_once("../classes/Crud.php");
include_once("../classes/Validation.php");

$crud = new Crud();

if(isset($_POST['Submit'])) {	
	$nomeocorrencia = $crud->escape_string($_POST['nomeocorrencia']);
	$descrisao = $crud->escape_string($_POST['descrisao']);
		
	//$msg = $validation->check_empty($_POST, array('name', 'age', 'email'));
	//$check_age = $validation->is_age_valid($_POST['age']);
	//$check_email = $validation->is_email_valid($_POST['email']);
	
	// checking empty fields
//	if($msg != null) {
//		echo $msg;		
		//link to the previous page
//		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
//	} elseif (!$check_age) {
//		echo 'Please provide proper age.';
//	} elseif (!$check_email) {
//		echo 'Please provide proper email.';
//	}	
//	else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = $crud->execute("INSERT INTO ocorrencia(NomeOcorrencia,Descricao) VALUES('$nomeocorrencia','$descrisao')");
		
		//display success message
	
		echo "<div class='alert alert-success' >Cadastrado com Sucesso!! <br/><a href='vizualizar_ocorrencia.php'>Visualizar Tabela</a> </div>";
	
	}else{
     
        echo "<div class='alert alert-success' >Não Cadastrado!! <br/><a href='vizualizar_ocorrencia.php'>Visualizar Tabela</a> </div>";
    }
//}
?>
</body>
</html>
