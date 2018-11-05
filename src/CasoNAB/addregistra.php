<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
//include_once("../sessao.php");
include_once("configuracao.php");

if(isset($_POST['Submit'])) {	
	$Ocorrencia_idOcorrencia = mysqli_real_escape_string($mysqli, $_POST['Ocorrencia_idOcorrencia']);
	$Posto_idPosto = mysqli_real_escape_string($mysqli, $_POST['Posto_idPosto']);
	$NomeCasoNAB = mysqli_real_escape_string($mysqli, $_POST['NomeCasoNAB']);
	$StatusCasoNAB = mysqli_real_escape_string($mysqli, $_POST['StatusCasoNAB']);
	$DataNascimento = mysqli_real_escape_string($mysqli, $_POST['DataNascimento']);
	$TelefoneFix = mysqli_real_escape_string($mysqli, $_POST['TelefoneFix']);
	$TelefoneCelular = mysqli_real_escape_string($mysqli, $_POST['TelefoneCelular']);
	$Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
	$DadosComplementares = mysqli_real_escape_string($mysqli, $_POST['DadosComplementares']);
	$DataCadastro = mysqli_real_escape_string($mysqli, $_POST['DataCadastro']);
		
	// checking empty fields
	if(empty($Ocorrencia_idOcorrencia) || 
	empty($Posto_idPosto) || 
	empty($NomeCasoNAB) || 
	empty($StatusCasoNAB) || 
	empty($DataNascimento) || 
	empty($TelefoneFix) || 
	empty($TelefoneCelular) || 
	empty($Email) || 
	empty($DadosComplementares) || 
	empty($DataCadastro)) 
	{
		if(empty($Ocorrencia_idOcorrencia)) {echo "<font color='red'>Ocorrencia_idOcorrencia field is empty.</font><br/>"; }
		if(empty($Posto_idPosto)) {echo "<font color='red'>Posto_idPosto field is empty.</font><br/>";}
		if(empty($NomeCasoNAB)) {echo "<font color='red'>NomeCasoNAB field is empty.</font><br/>";}
		if(empty($StatusCasoNAB)) {echo "<font color='red'>StatusCasoNAB field is empty.</font><br/>";}
		if(empty($DataNascimento)) {echo "<font color='red'>DataNascimento field is empty.</font><br/>";}
		if(empty($TelefoneFix)) {echo "<font color='red'>TelefoneFix field is empty.</font><br/>"; }
		if(empty($TelefoneCelular)) {echo "<font color='red'>TelefoneCelular field is empty.</font><br/>";}
		if(empty($Email)) {echo "<font color='red'>Email field is empty.</font><br/>";}
		if(empty($DadosComplementares)) {echo "<font color='red'>DadosComplementares field is empty.</font><br/>";}
		if(empty($DataCadastro)) {echo "<font color='red'>DataCadastro field is empty.</font><br/>";}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO CasoNAB (idCasoNAB, Ocorrencia_idOcorrencia, Posto_idPosto, NomeCasoNAB, StatusCasoNAB, DataNascimento, TelefoneFix, TelefoneCelular, Email, DadosComplementares, DataCadastro) 
		VALUES (NULL, '$Ocorrencia_idOcorrencia', '$Posto_idPosto', '$NomeCasoNAB', '$StatusCasoNAB', '$DataNascimento', '$TelefoneFix', '$TelefoneCelular', '$Email', '$DadosComplementares', '$DataCadastro')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='../index.php'>View Result</a>";
		
	}
}
?>
</body>
</html>
