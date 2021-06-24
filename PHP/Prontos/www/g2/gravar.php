<html>
<title> Gravar </title>
<body>
	Gravando os Dados
	<br><br>
	<?php
		mysql_connect("localhost","root");
		mysql_select_db("figura");
		$nome=$_GET["nome"];
		$estoque=$_GET["estoque"];
		$figura=$_GET["figura"];
		$tamanhomaximo=$_GET["tamanhomaximo"];
		$gravafigura=addslashes(fread(fopen($figura,"r"),filesize($figura)));
		$executa="insert into produto(nome,estoque,figura) values ('$nome',$estoque,'$gravafigura')";
		$resultado=mysql_query($executa);
		if ($resultado){
			printf("Dados Gravados");
		} else {
			printf("Problemas");
		}
	?>
</body>
</html>