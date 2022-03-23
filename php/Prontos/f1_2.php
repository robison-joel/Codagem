<html>
<title> Exemplo de Figura (Cadastro) </title>
<body>
	Cadastro de Produto
	<form method="get" action="gravar.php">
		<br>Nome: <input type="text" name="nome">
		<br>Estoque: <input type="text" name="estoque">
		<br>Figura: <input type="file" name="figura">
		<br><br><input type="submit" value="gravar">
		<br><input type="hidden" name="tamanhomaximo" value="1000000">
	</form>
</body>
</html>