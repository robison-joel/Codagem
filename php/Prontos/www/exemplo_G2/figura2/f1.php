<html>
  <title>exemplo de figuras(cadastro)</title>
  <body>
    cadastro de produtos
	<form action="grava.php" method="post" enctype="multipart/form-data">
	  <br>nome:<input type="text" name="nome">
	  <br>estoque:<input type="text" name="estoque">
	  <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
	  <br>imagem<input type="file" name="figura">
	  <br><br> <input type="submit" value="gravar">
	</form>
  </boby>
</html>