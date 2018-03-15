<?php 

$empresa = "Hcode";

//Troca de strings
/*Três parâmetros, o primeiro parâmetro
é o que eu quero trocar, e o segundo é o que
entrará no lugar, o terceiro é o alvo, a variável que irá ser trocada.*/

$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;
 
 ?>