<?php

IF (isset($_POST['operacao'])){
	$operacao=$_POST['operacao'];
}
else {
	$operacao=0;
}
IF (isset($_POST['num1'])){
	$num1=$_POST['num1'];
}
else {
	$num1=0;
}
IF (isset($_POST['num2'])){
	$num2=$_POST['num2'];
}
else {
	$num2=0;
}

if ($operacao == "somar") {
	echo somar(num1,num2);
}
elseif ($operacao == "subtrair") {
	echo subtrair(num1,num2);
}
else if ($operacao == "multiplicar") {
	echo multiplicar(num1,num2);
}
else {
	echo dividir(num1,num2);
}


function somar ($num1,$num2)
{
	$soma=0;
	$soma= $num1 + $num2;
	return $soma;
}
function subtrair ($num1,$num2)
{
	$sub=0;
	$sub= $num1 - $num2;
	return $sub;
}

function multiplicar ($num1,$num2)
{
	$mult=0;
	$mult= $num1 * $num2;
	return $mult;
}

function dividir ($num1,$num2)
{
	$div=0;
	$div= $num1 / $num2;
	return $div;
}




if ($_SERVER['REQUEST_METHOD'] !='POST') {
?>

<!DOCTYPE html>
<html>
<head>
	<title>Números</title>
	<meta charset="utf-8">
</head>
<body>

	<h3>Introduza os seus números</h3>

	<select name="operacao">
	
	<option value="soma">Somar</option>
	<option value="subtracao">Subtrair</option>
	<option value="diviso">Dividir</option>
	<option value="multiplicacao">Multiplicar</option>

</select>
<br>
<br>

	<form action="captar3.php" method="POST">
		Num1: <input type="text" name="num1" size="3"> <br><br>
		Num2: <input type="text" name="num2" size="3"> <br><br>
		<input type="submit" value="Submeter Dados">

	</form>

</body>
</html>

<?php
}

else {

	$soma=$num1+$num2;
	echo $soma;
	echo "<br>";
	$mult=$num1*$num2;
	echo $mult;
	echo "<br>";
	$div=$num1/$num2;
	echo $div;
	echo "<br>";
	$sub=$num1-$num2;
	echo $sub;

}