<html>
  <title>exemplo de figuras(cadastro)</title>
  <body>
    listagem dos dados
	<table border="1">
	  <tr>
	    <td>codigo</td>
		<td>nome</td>
		<td>estoque</td>
		<td>imagem</td>
	  </tr>
	  
		<?php
		  $conexao=mysql_connect("localhost","root");
		  mysql_select_db("figura2");
		  $consulta="select codigo,nome,estoque,figura from produto order by nome";
		  $resultado=mysql_query($consulta,$conexao);
		  if (!$resultado){
		     printf("Problemas ao consultar dados");
		  }else{
               while ($linha=mysql_fetch_row($resultado)){
			      printf("<tr><td>$linha[0]</td>\n");
				  printf("<td>$linha[1]</td>\n");
				  printf("<td>$linha[2]</td>\n");				  
				  printf("<td> ");
				  if ($linha[3]!=""){
				     printf("<img src='$linha[3]'>");
				  }else{
				     printf("&nbsp;");
				  }
				  printf("</td></tr>\n");
			   }
	      }
		?>
		</table>
  </boby>
</html>