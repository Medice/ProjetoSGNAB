<?php
//including the database connection file
include_once("../sessao.php");
?>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="view.php">CasoNAB</a>
	<br/><br/>

	<form action="addregistra.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Ocorrencia_idOcorrencia</td>
				<td><input type="text" name="Ocorrencia_idOcorrencia"></td>
			</tr>
			<tr> 
				<td>Posto_idPosto</td>
				<td><input type="text" name="Posto_idPosto"></td>
			</tr>
			<tr> 
				<td>NomeCasoNAB</td>
				<td><input type="text" name="NomeCasoNAB"></td>
			</tr>
			<tr> 
				<td>StatusCasoNAB</td>
				<td><input type="text" name="StatusCasoNAB"></td>
			</tr>
			<tr> 
				<td>DataNascimento</td>
				<td><input type="date" name="DataNascimento"></td>
			</tr>
			<tr> 
				<td>TelefoneFix</td>
				<td><input type="text" name="TelefoneFix"></td>
			</tr>
			<tr> 
				<td>TelefoneCelular</td>
				<td><input type="text" name="TelefoneCelular"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="Email"></td>
			</tr>
			<tr> 
				<td>DadosComplementares</td>
				<td><input type="text" name="DadosComplementares"></td>
			</tr>
			<tr> 
				<td>DataCadastro</td>
				<td><input type="date" name="DataCadastro"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>
