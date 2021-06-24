<html>
<head><title>Trabalho de PHP</title></head>
<body>
	<center>
	<font size="5" color="red" face="verdana"> Prova G1 </font>
	<br><a href="cadastro.html">
	<font size="4" color="black" face="verdana"> Mauricio Westrupp </font></a>
	<br><hr>
	<br>
<?php
	$consulta="select codigo,nome,proprietario,idade,email from animal";
	if (isset($_GET["tipo"]))
	{
		$tipo=$_GET['tipo'];
		if (isset($_GET["valor"]))
		{
			$valor=$_GET['valor'];
			if ($tipo = "Todos")
			{
				$consulta="select codigo,nome,proprietario,idade,email from animal";
			}
			if ($tipo = "Nome")
			{
				$consulta="select codigo,nome,proprietario,idade,email from animal where nome like '%$valor%'";
			}
			if ($tipo = "Proprietario")
			{
				$consulta="select codigo,nome,proprietario,idade,email from animal where proprietario < '%$valor%%'";
			}
		}
	}
	$conexao=mysql_connect("localhost","root");
	mysql_select_db("prova",$conexao);
	$resultado=mysql_query($consulta,$conexao);
	printf("<table border=1>");
	printf("<tr><td>Codigo</td><td>Animal</td><td>Proprietario</td><td>Idade Animal</td></tr>");
	while ($linha=mysql_fetch_row($resultado)){
		printf("<tr><td><a href='visualizar.php?codigo=$linha[0]'> $linha[0] </a>\n</td>");
		printf("<td>$linha[1] \n</td>");
		if ($linha[4] <> ""){
			printf("<td><a href='mailto:$linha[4]'> $linha[2] </a> \n</td>");
		} else {
		printf("<td>$linha[2] \n</td>");
		}
		printf("<td>$linha[3] \n</td></td>");
		printf("<br>");
	}
	printf("</table>");
?>
	<br>
	<form action="principal.php" method="get" name="formulario">
	<table align="right">
	<tr><td>Localizar animais por </td>
	<td><select name="tipo" size="1">
		<option>Todos</option>
		<option>Nome</option>
		<option>Proprietario</option>
	</select></td><td> igual a <input type="text" name="valor" size="15" maxlenght="25"></td><tr>
	<tr><td><input type="submit" name="" value="Localizar"></td></tr>
	</table>
	</form>
	<br><br><br><br><br><br>
	<table align="left"><tr><td>
	<a href="cadastro.php">Cadastrar novo animal</a></td></tr>
	</table>
</body>

</html>