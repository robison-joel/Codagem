<?php
	function expoente($base,$expo){
	    $r=1;
		for ($i=1;$i<=$expo;$i++){
			$r=$r*$base;
		}
		return($r);
	}
	function parimpar($numero){
		if ($numero % 2 == 0){
			$r="par";
		} else {
			$r="impar";
		}
		return($r);
	}
?>