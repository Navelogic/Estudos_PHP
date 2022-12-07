<?php

#Tipo Simples de Concatenação
$euQuero = 'Eu quero ser um programador' . ' PHP';
print_r($euQuero);


#Concatenação Abreviada:
# \n\n Faz pular duas linhas FUNCIONA SÓ COM ""
$concatenacaoAbreviada = "\n\n Eu quero ser um programador";
$concatenacaoAbreviada .= " PHP 2";
print_r($concatenacaoAbreviada);

#Concatenação de Variavéis
$euQuero = "\n\n Eu quero ser um programador";
$php = ' PHP 3';

echo $euQuero . $php;
?>