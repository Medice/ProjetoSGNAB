<?php
//including the database connection file
//include_once("../sessao.php");
include_once("configuracao.php");
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM CasoNAB ORDER BY idCasoNAB DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
	<script rel="stylesheet"  type="text/css" src="../js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
</head>

<body>



<div class="jumbotron text-center">
        <h1>Caso Nab</h1>
      </div>
       


<a href="add.php">Add Novo CasoNAB</a><br/><br/>

<table class="table" width='80%' border=0>
    
    <tr bgcolor='#CCCCCC'>
    	<td>idCasoNAB</td>
    	<td>Ocorrencia_idOcorrencia</td>
    	<td>Posto_idPosto</td>
    	<td>NomeCasoNAB</td>
    	<td>StatusCasoNAB</td>
    	<td>DataNascimento</td>
    	<td>TelefoneFix</td>
    	<td>TelefoneCelular</td>
    	<td>Email</td>
    	<td>DadosComplementares</td>
		<td>DataCadastro</td>
		
    </tr>
    <?php 
    //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
    while($res = mysqli_fetch_array($result)) {
    	echo "<tr>";
    	echo "<td>".$res['idCasoNAB']."</td>";
    	echo "<td>".$res['Ocorrencia_idOcorrencia']."</td>";
    	echo "<td>".$res['Posto_idPosto']."</td>";
    	echo "<td>".$res['NomeCasoNAB']."</td>";
    	echo "<td>".$res['StatusCasoNAB']."</td>";
    	echo "<td>".$res['DataNascimento']."</td>";
    	echo "<td>".$res['TelefoneFix']."</td>";
    	echo "<td>".$res['TelefoneCelular']."</td>";
    	echo "<td>".$res['Email']."</td>";
    	echo "<td>".$res['DadosComplementares']."</td>";
    	echo "<td>".$res['DataCadastro']."</td>";
    	echo "<td> <a href=../Historico/Adicionar_historico.php?id=$res[idCasoNAB]>Cadastrar</a> | <a href=../Historico/vizualizar_historico.php?id=$res[idCasoNAB]>Visualizar</a> | <a href=\"editnab.php?id=$res[idCasoNAB]\">Edit</a> | <a href=\"delete.php?id=$res[idCasoNAB]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
    }
    ?>
</table>




</body>
</html>
