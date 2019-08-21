<?php
$xml=simplexml_load_file("livro.xml") 
or die("Erro: não foi possível criar objeto");


echo $xml->para . "<br>";
echo $xml->de . "<br>";
echo $xml->cabecalho . "<br>";

?>