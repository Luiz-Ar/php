<?php

//ORDEM DE PRECEDENCIA

$resultado = 10 + 3 / 2;
echo $resultado;
echo "<br>";


$resultado2 = (10 + 3) / 2;
//echo $resultado2;

//&& = e
$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($resultado3);
echo "<br>";

//|| = ou
$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado3);
 ?>