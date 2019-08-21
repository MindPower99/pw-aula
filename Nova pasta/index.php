
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec";

$aluno = $_POST["aluno"];
$senha = $_POST["senha"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO aluno (aluno,senha) VALUES ('$aluno','$senha')";
$result = $conn->query($sql);

/*if ($conn->query($sql) == TRUE) {
	echo "sucesso";
} else {
	echo "Falha: " .$sql . "<br>" . $conn->error;
}*/
$conn->close();
?>