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
	
	if (isset($_GET["codigo"]))
	{
		$codigo=$_GET['codigo'];
		$consulta="select * from animal where codigo = $codigo";
	}
	$conexao=mysql_connect("localhost","root");
	mysql_select_db("prova",$conexao);
	$resultado=mysql_query($consulta,$conexao);
	while ($linha=mysql_fetch_row($resultado)){
		printf("<table>");
		printf("<tr><td>Codigo:</td><td> <b>$linha[0]</b></td></tr><br>");		
		printf("<tr><td>Nome: </td><td> <b>$linha[1]</b> </td></tr>");
		printf("<tr><td>Raca: </td><td> <b>$linha[2]</b></td></tr>");
		printf("<tr><td>Proprietario: </td><td> <b>$linha[3]</b> </td></tr>");
		printf("<tr><td>email: </td><td> <b>$linha[4]</b> </td></tr>");
		printf("<tr><td>Idade: </td><td> <b>$linha[5]</b> </td></tr>");
		printf("<br>");
		printf("<br>");
		printf("<br>");
	}
	printf("</table>");
?>
</body>  

<br><br><br>
<a href="principal.php"> Voltar</a>
</html>