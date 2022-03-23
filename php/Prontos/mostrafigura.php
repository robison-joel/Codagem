<?php
 
 if(isset($_GET["id"])) {
    $id=$_GET["id"];
	 $conexao=mysql_connect("localhost","root");
	 mysql_select_db("figura");
	 $consulta="select figura from produto where codigo=$id";
	 $resultado=mysql_query($consulta,$conexao);
     $figura = @mysql_result($resultado,0,"figura");	 
	 
	 echo $figura;	  


};
?>