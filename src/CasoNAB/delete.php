<?php
//including the database connection file
//include_once("../sessao.php");
include_once("configuracao.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM CasoNAB WHERE idCasoNAB=$id");

//redirecting to the display page (index.php in our case)
header("Location: ../index.php");
?>
