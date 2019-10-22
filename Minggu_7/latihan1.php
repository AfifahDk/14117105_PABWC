<?php
function swap(&$a, &$b){
	$temp=$a;
	$a=$b;
	$b=$temp;
}
echo "Pertukaran 2 variable";
echo "<br/>";
echo "<br/>";
$a=5;
$b=6;
$temp=0;
echo "Variable awal 1 : $a <br/>";
echo "Variable awal 2 :$b <br/>";
echo "<br/>";
swap($a, $b);
echo "Variable 1 setalah diswap : $a</br>";
echo "Variable 2 setalah diswap : $b</br>";
?>