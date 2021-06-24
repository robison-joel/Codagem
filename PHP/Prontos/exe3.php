<html>
<head><title>Exemplo de funcoes</title></head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['cont'])){
			printf("O valor de cont continua igual {$_SESSION['cont']}<br>");
		}
	?>
	<br><br>
	<a href="exe2.php">Voltar</a>
</body>
</html>