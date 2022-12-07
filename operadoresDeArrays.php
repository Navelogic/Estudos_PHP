<?php

#União
$array1 = [0 => 'Arian', '1' => 'Danilo', 2 => 'Felipe'];
$array2 = [3 => 'Henrique'];
$array3 = ($array1 + $array2);

print_r($array3);
print_r("\n");

#Igualdade
$array1 = [0 => 1];
$array2 = [0 => 1];
$array3 = ($array1 == $array2);

print_r($array3);
#Retorna: 1, significa que os valores dos arrays são iguais
print_r("\n");

#Diferença
$array1 = [0 => 1];
$array2 = [0 => 2];
$array3 = ($array1 != $array2);

print_r($array3);
#Retorna: 1, significa que os valores dos arrays são diferentes
print_r("\n");

#Idêntico
$array1 = [0 => 1];
$array2 = [0 => 1];
$array3 = ($array1 === $array2);

print_r($array3);
#Retorna: 1, significa que os valores dos arrays são iguais e do mesmo tipo (número inteiro)
print_r("\n");

#Não Idêntico
$array1 = [0 => 1];
$array2 = [0 => '1'];
$array3 = ($array1 !== $array2);

print_r($array3);
#Retorna: 1, significa que os valores dos arrays não são iguais e/ou não são do mesmo tipo (número inteiro)
print_r("\n");
?>