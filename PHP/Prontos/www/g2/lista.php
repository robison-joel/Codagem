<html>
<head><title>Lista</title></head>
<body>
	Lista de Produtos
	<table>
		<tr>
			<td>Codigo</td>
			<td>Produto</td>
			<td>Estoque</td>
			<td>Imagem</td>
		</tr>
		<?php
			$conexao=mysql_connect("localhost","root");
			mysql_select_db("figura",$conexao);
			$consulta="select codigo,nome,estoque,figura from produto order by nome";
			$resultado=mysql_query($consulta,$conexao);
			if (!$resultado){
				printf("Problemas na consulta $consulta");
			} else {
				while ($linha=mysql_fetch_row($resultado)){
					printf("<tr><td>$linha[0]</td>");
					printf("<td>$linha[1]</td>");
					printf("<td>$linha[2]</td>");
					$figura=$linha[3];
					printf("<td><img src='$figura'></td></tr>");
				}
			}
		?>
	</table>
</body>
</html>