<?php 

/*for ($i=0; $i < ; $i++) { 
	# code...}
condição (variavel inicia em, termina em(até), soma 1 na variavel(incremento)) */


//pular de 5 em 5
for ($contador=0; $contador <= 1000 ; $contador += 5) { 
	if ($contador > 200 && $contador < 950) continue;

	if ($contador === 990) break;
		echo $contador . "<br>";
}

 ?>