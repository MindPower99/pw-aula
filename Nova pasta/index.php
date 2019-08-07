<?php

$conn = new mysqli('localhost', 'root', '', 'alunoetec');
 
if($conn->connect error) {
	die('Connection failed: " .$conn->connect error);
}

$sql = "SELECT nome, senha from aluno";

$result = $conn->query($sql);
