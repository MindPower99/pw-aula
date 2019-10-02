<?php  

	class Valor {
		
	function Atribuir($val) {
		$val = 70;
		return $val;
	}
		
	function Analisar() {
		$valo = Valor::Atribuir($val);
		
		if ($valo > 0) {
			echo "Valor de número par";
		}
		else if ($valo < 0) {
			echo "Valor de número par";
		}
		else {
			echo "Valor igual a zero";
		}
	}
}

$obj = new Valor;

$obj -> Analisar();
?>
