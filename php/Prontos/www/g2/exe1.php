<html>
<head><title>Exemplo de funções</title></head>
<body>
	Testando as funções<br>
	<?php
		include ("novo.php");
		$x=expoente(2,3);
		printf("2 no expoente 3 e $x<br>");
		$x=expoente(5,4);
		printf("5 no expoente 4 e $x<br>");
		$p=parimpar(5);
		printf("5 e $p<br>");
		$p=parimpar(28);
		printf("28 e $p<br>");	
	?>
	<a href="exe2.php">Vai</a>
</body>
</html>