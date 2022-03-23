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
		  mysql_select_db("figura");
		  $consulta="select codigo,nome,estoque from produto order by nome";
		  $resultado=mysql_query($consulta,$conexao);
		  if (!$resultado){
		     printf("Problemas ao consultar dados");
		  }else{
               while ($linha=mysql_fetch_row($resultado)){
			      printf("<tr><td>$linha[0]</td>");
				  printf("<td>$linha[1]</td>");
				  printf("<td>$linha[2]</td>");
				  printf("<td> <img src='mostrafigura.php?id=$linha[0]'></td>");
				  printf("</tr>");
			   }
	      }
		?>
		</table>
  </boby>
</html>