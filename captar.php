<?php

IF (isset($_POST['idade1'])){
	$idade1=$_POST['idade1'];
}
else {
	$idade1=0;
}
IF (isset($_POST['idade2'])){
	$idade2=$_POST['idade2'];
}
else {
	$idade2=0;
}
IF (isset($_POST['idade3'])){
	$idade3=$_POST['idade3'];
}
else {
	$idade3=0;
}
IF (isset($_POST['idade4'])){
	$idade4=$_POST['idade4'];
}
else {
	$idade4=0;
}

$soma=$idade1+$idade2+$idade3+$idade4;
echo $soma;

?>