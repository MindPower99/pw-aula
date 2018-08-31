function Soma() {
	var n1 = document.getElementById("n1").value;
	var n2 = document.getElementById("n2").value;
	var soma = parseFloat(n1) + parseFloat(n2);
	alert(soma)
}
function Subtrair() {
	var n1 = document.getElementById("n1").value;
	var n2 = document.getElementById("n2").value;
	var subtracao = n1 - n2;
	alert(subtracao)
}
function Dividir() {
	var n1 = document.getElementById("n1").value;
	var n2 = document.getElementById("n2").value;
	var divisao = n1 / n2;
	alert(divisao)
}
function Multiplicar() {
	var n1 = document.getElementById("n1").value;
	var n2 = document.getElementById("n2").value;
	var multiplicacao = n1 * n2;
	alert(multiplicacao)
}