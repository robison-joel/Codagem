<html>
<head><title>Exemplo de funcoes</title></head>
<body>
	<?php
		session_start();
		if (isset($_SESSION['cont'])){
			$_SESSION['cont']++;
			printf('Voce ja viu o cont igual a {$_SESSION["cont"]}<br>');
		} else {
			$_SESSION['cont']=0;
			printf("Acabei de criar o cont<br>");
		}
	?>
	<br><br>
	<a href="exe3.php">Proxima Pagina</a>
</body>
</html>