<?php
//including the database connection file
//include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
//$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>
	<title>Login</title>
</head>

<body>
	<form method="post" action="conecta_sessao.php" id="formlogin" name="formlogin" >
    <fieldset id="fie">
    <legend>LOGIN</legend><br />
    <label>NOME : </label>
    <input type="text" name="login" id="login"  /><br />
    <label>SENHA :</label>
    <input type="password" name="senha" id="senha" /><br />
    <input type="submit" value="LOGAR	"  />
    </fieldset>
    </form>
</body>
</html>


