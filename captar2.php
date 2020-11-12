<?php

IF (isset($_POST['Num1'])){
	$Num1=$_POST['Num1'];
}
else {
	$Num1=0;
}
IF (isset($_POST['Num2'])){
	$Num2=$_POST['Num2'];
}
else {
	$Num2=0;
}

$soma=$Num1+$Num2;
echo $soma;
echo "<br>";
$mult=$Num1*$Num2;
echo $mult;
echo "<br>";
$div=$Num1/$Num2;
echo $div;
echo "<br>";
$sub=$Num1-$Num2;
echo $sub;

?>