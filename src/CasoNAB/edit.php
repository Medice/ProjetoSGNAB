<?php
// including the database connection file
//include_once("../sessao.php");
include_once("configuracao.php");

if(isset($_POST['idCasoNAB']))
{	
	$idCasoNAB = mysqli_real_escape_string($mysqli, $_POST['idCasoNAB']);
	
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
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE casonab SET 
		Ocorrencia_idOcorrencia='$Ocorrencia_idOcorrencia',
		Posto_idPosto='$Posto_idPosto',
		NomeCasoNAB='$NomeCasoNAB',
		StatusCasoNAB='$StatusCasoNAB',
		DataNascimento='$DataNascimento',
		TelefoneFix='$TelefoneFix',
		TelefoneCelular='$TelefoneCelular',
		Email='$Email',
		DadosComplementares='$DadosComplementares',
		DataCadastro='$DataCadastro' 
		WHERE idCasoNAB=$idCasoNAB");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: ../index.php");
	}
}

