<?php 

$n1 = 10;
$n2 = 15;
$n3 = 23;

if ($n1 > $n2 && $n1 > $n3) {
	echo $n1;
} elseif ($n2 > $n1 && $n2 > $n3) {
	echo $n2;
} else {
	echo $n3;
}

 ?>