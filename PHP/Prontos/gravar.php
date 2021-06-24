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
	$nome=$_GET['nome'];
	$raca=$_GET['raca'];
	$proprietario=$_GET['proprietario'];
	$email=$_GET['email'];
	$idade=$_GET['idade'];
	$conexao=mysql_connect("localhost","root");
	if ($conexao) {
		mysql_select_db("prova",$conexao);
		$executa="insert into animal(nome,raca,proprietario,email,idade) values ('$nome','$raca','$proprietario','$email',$idade)";
		$resultado=mysql_query($executa,$conexao);
		printf("Animal $nome gravado com sucesso");
	}else{
		echo "Erro na conexão aos dados";
	}
?>
</body>  
	<br><br><br>
	<a href="principal.php"> Voltar</a>
</html>