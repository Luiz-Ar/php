<?php
//Tipos Básicos
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;
////////////////////////////////////////////////////////
//Tipos Compostos - Array e Objetos
$frutas = array("abacaxi", "laranja", "manga");

//echo $frutas[2];
//Dado Objeto
$nascimento = new Datetime();

//var_dump($nascimento);
//////////////////////////////////////////////////////
//Tipo Especiais
$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

$nulo = NULL; //Ausência de Valor
$vazio = " "; //Está reservado

var_dump($nulo);
?>