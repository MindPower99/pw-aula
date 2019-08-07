
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etec";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,nome, senha FROM aluno";
$result = $conn->query($sql);

echo "O valor de nome é: " . $_POST["nome"] . "<br>"; ; 
echo "<br>O valor de senha  é: " . $_POST["senha"] . "<br>"; 

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " . $row["senha"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>