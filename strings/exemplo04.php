<?php 

$frase = "A repetição é mãe da retenção";

$palavra = "mãe";

//Procurar palavra

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

$texto2 = substr($frase, $q);

$texto3 = substr($frase, $q + strlen($palavra), strlen($frase));

var_dump($q);
echo "<br>";
var_dump($texto);
echo "<br>";
var_dump($texto2);
echo "<br>";
var_dump($texto3);

 ?>