<?php  

	class Tabuada {
		
		function tabuada() {
		$n = 1;
		
		for ($i = 0; $i <= 10; $i++) {
			$valor = $n * $i;
			echo "<br>" . $valor . "<br>";
		}
		}
	}
	
	class N_par {
		
		function n_par() {
			for ($a = 0; $a <= 200; $a ++) {
				$resto = $a % 2;
				if  ($resto == 0) {
					echo "<br>" . $a. "<br>";
				}
			}
		}
	}

//$obj = new Tabuada();

$obj = new N_par();


?>
