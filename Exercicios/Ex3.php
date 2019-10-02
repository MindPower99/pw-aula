<?php  

	class Usuario { // nomenclatura da classe
		public $nome;  // propriedade da classe
		public $cpf;	// propriedade da classe
		public $endereco; // propriedade da classe
		
		function preparaUsuario() { // método da classe
			$this->nome = "xxxxxxxxx"; 
			$this->cpf = "99999999"; 
			$this->endereco = "Rua Fulano";
		}
		
	}

	$obj =  new Usuario();
	$obj -> preparaUsuario();
	echo $obj->nome;
	echo "<br>";
	echo $obj->cpf;
	echo "<br>";
	echo $obj->endereco;
?>