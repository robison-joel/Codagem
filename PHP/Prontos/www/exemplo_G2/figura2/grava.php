<html>
  <title>exemplo de figuras(cadastro)</title>
  <body>
    gravando dados
	<?php
		$nome=$_POST["nome"];
		$estoque=$_POST["estoque"];
		$conexao=mysql_connect("localhost","root");
	    mysql_select_db("figura2");
		$inserir="insert into produto(nome,estoque,figura) values('$nome',$estoque,'')";
		$resposta=mysql_query($inserir,$conexao);
		if ($resposta){
		    $consulta="select max(codigo)as codigo from produto where nome='$nome' and estoque=$estoque";
			$resposta=mysql_query($consulta,$conexao);
			if ($resposta){
			    // gravando o nome da figura com o código do produto gerado
				$codigo=mysql_result($resposta,0,"codigo");			
				$uploaddir = "imagens/";  //variável que possui o caminha da figura
				// Nas versões do PHP anteriores a 4.1.0, deve ser usado $HTTP_POST_FILES
				// ao invés de $_FILES.
				$quebrado = explode(".", $_FILES['figura']['name']); //quebra uma string em um vetor neste caso irá quebrar a string entre antes e depois do ponto
				// está gerando uma sting contendo o caminho da imagem mais um nome de arquivo começando pelo prefixo "im" e após o código da imagem e colocando a extenção do arquivo
				// vamos imaginar que a variável $codigo retorne 15 e o tipo de arquivo seja JPG , a variável $destino será igual á "imagens/im15.JPG"
				$destino=$uploaddir ."im".$codigo.".". $quebrado[1];  
				//A FUNCAO move_uploaded_file envia um arquivo para o servidor
				if (move_uploaded_file($_FILES['figura']['tmp_name'], $destino)) {
				    //salva o nome do caminho do arquivo no banco de dados
					$inserir="update produto set figura='$destino' where codigo=$codigo";
					$resposta=mysql_query($inserir,$conexao); 
					printf("$inserir");
				    echo "<br> dados salvos com sucesso <br>";
				}				
			}else{
			  echo "<br> $consulta <br> não foi encontrado o dado salvo no banco<br>";
			}
		}else{
		    echo "<br> $inserir <br> não foi possivel salvar os dados no banco<br>";
		}
	 
	  
	?>
  </boby>
</html>