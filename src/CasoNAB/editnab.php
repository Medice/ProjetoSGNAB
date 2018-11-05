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
		//header("Location: view.php");
	}
}


if(!isset($_GET['id']))
{
    //header("Location: view.php");
    echo 'SEM GETID';
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM CasoNAB WHERE idCasoNAB=$id");

while($res = mysqli_fetch_array($result))
{
	$idCasoNAB = $res['idCasoNAB'];
	$Ocorrencia_idOcorrencia = $res['Ocorrencia_idOcorrencia'];
	$Posto_idPosto = $res['Posto_idPosto'];
	$NomeCasoNAB = $res['NomeCasoNAB'];
	$StatusCasoNAB = $res['StatusCasoNAB'];
	$DataNascimento = $res['DataNascimento'];
	$TelefoneFix = $res['TelefoneFix'];
	$TelefoneCelular = $res['TelefoneCelular'];
	$Email = $res['Email'];
	$DadosComplementares = $res['DadosComplementares'];
	$DataCadastro =$res['DataCadastro'];
}
?>
<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="view.php">CasoNAB</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Ocorrencia_idOcorrencia</td>
				<td><input type="text" name="Ocorrencia_idOcorrencia" value="<?php echo $Ocorrencia_idOcorrencia;?>"></td>
			</tr>
			<tr> 
				<td>Posto_idPosto</td>
				<td><input type="text" name="Posto_idPosto" value="<?php echo $Posto_idPosto;?>"></td>
			</tr>
			<tr> 
				<td>NomeCasoNAB</td>
				<td><input type="text" name="NomeCasoNAB" value="<?php echo $NomeCasoNAB;?>"></td>
			</tr>
			<tr> 
				<td>StatusCasoNAB</td>
				<td><input type="text" name="StatusCasoNAB" value="<?php echo $StatusCasoNAB;?>"></td>
			</tr>
			<tr> 
				<td>DataNascimento</td>
				<td><input type="date" name="DataNascimento" value="<?php echo $DataNascimento;?>"></td>
			</tr>
			<tr> 
				<td>TelefoneFix</td>
				<td><input type="text" name="TelefoneFix" value="<?php echo $TelefoneFix;?>"></td>
			</tr>
			<tr> 
				<td>TelefoneCelular</td>
				<td><input type="text" name="TelefoneCelular" value="<?php echo $TelefoneCelular;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $Email;?>"></td>
			</tr>
			<tr> 
				<td>DadosComplementares</td>
				<td><input type="text" name="DadosComplementares" value="<?php echo $DadosComplementares;?>"></td>
			</tr>
			<tr> 
				<td>DataCadastro</td>
				<td><input type="date" name="DataCadastro" value="<?php echo $DataCadastro;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="idCasoNAB" value=<?php echo $idCasoNAB;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>