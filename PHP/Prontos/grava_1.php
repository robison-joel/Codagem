<html>
  <title>exemplo de figuras(cadastro)</title>
  <body>
    gravando dados
	<?php
	  $nome=$_GET["nome"];
	  $estoque=$_GET["estoque"];
	  $figura=$_GET["figura"];
	  $gravafigura = addslashes(fread(fopen($figura, "r"), filesize($figura)));

	  $conexao=mysql_connect("localhost","root");
	  mysql_select_db("figura");
	  $inserir="insert into produto(nome,estoque,figura) values('$nome',$estoque,'$gravafigura')";
	  $resposta=mysql_query($inserir,$conexao);
	  if ($resposta){
	     printf("Dados gravados com sucesso");
	  }else{
	     printf("problemas salvar os dados");
      }
	   
	  
	  
	?>
  </boby>
</html>