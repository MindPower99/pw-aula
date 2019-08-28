<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec270819";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$xml=simplexml_load_file("livro.xml") or die("Error: Cannot create object");
foreach ($xml->children() as $books) {
	echo "<pre>";
	echo "Titulo: " . $books->nome . "<br>";
	echo "Autor: " . $books->autor . "<br>";
	echo "Ano: " . $books->ano . "<br>";
	echo "Preco: " . $books->preco . "<br>";
	echo "Chave: " . $books->chave . "<br>";
	
	$nome = $books -> nome;
	$autor = $books -> autor;
	$ano = $books -> ano;
	$preco = $books -> preco;
	$chave = md5($books->nome);
	
	$sql = "INSERT INTO livro(nome, autor, ano, price, chave) VALUES ('$nome','$autor','$ano','$preco','$chave')" ;
	
	if ($conn->query($sql) == TRUE) {
		echo("Sucesso");
	} else {
		echo "Falha<br>" .$sql. "<br>" . $conn->error;
	}
}

$conn->close();
?>