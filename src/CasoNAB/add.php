
<html>
<head>
	<title>Add Data</title>
	<script rel="stylesheet"  type="text/css" src="../js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
</head>

<body>

    

<div class="row">
				
				<div class="col-sm-4"></div>
			<div class="col-sm-4">

		<legend>Cadastro Nab</legend></br>


	<form action="addregistra.php" method="post" name="form11">
	
			   <div class="form-group">
				<label>Ocorrencia_idOcorrencia</label>
				<input  class="form-control"  type="text" name="Ocorrencia_idOcorrencia">
               </div>
               <div class="form-group"> 
				<label>Posto_idPosto</label>
				<input type="text" class="form-control" name="Posto_idPosto">
				</div>
				<div class="form-group">  
				<label>NomeCasoNAB</label>
				<input  type="text" class="form-control"  name="NomeCasoNAB" />
                 </div> 
             <div class="form-group">  
				<label>StatusCasoNAB</label>
				<input   type="text" class="form-control" name="StatusCasoNAB">
				</div> 
				<div class="form-group"> 
				<label>DataNascimento</label>
				<input type="date" class="form-control" name="DataNascimento">
				</div> 
				<div class="form-group">
				<label>TelefoneFix</label>
				<input type="text" class="form-control" name="TelefoneFix">
				</div> 
				<div class="form-group">
				<label>TelefoneCelular</label>
				<input type="text" class="form-control" name="TelefoneCelular">
				</div> 
				<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="Email">
				</div> 
				<div class="form-group">
				<label>DadosComplementares</label>
				<input type="text" class="form-control" name="DadosComplementares">
				</div> 
				<div class="form-group">
				<label>DataCadastro</label>
				<input type="date" class="form-control" name="DataCadastro">
				</div> 
			
			<input type="submit" class="btn btn-default" name="Submit" value="Add">
		
	
	</form>
</div>
</div>


</body>
</html>
