<?php
/*
$anoNascimento = 1998;*/

//Na linha debaixo temos uma variável com número no nome
$nome1 = "Luiz";

$sobrenome = "Araujo";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;
exit;
echo $nome1;

echo "<br/>";
//limpar variável
unset($nome1);

//Se a variável estiver definida
if (isset($nome1)) {
	echo $nome1;
}

?>