<?php

$a = true;
$b = true;

print_r($a ^ $b);
print_r("\n");
#Retorna: int(0) zero, ou seja, falso, pois ambos os operandos é verdadeiro;




$a = true;
$b = false;

print_r($a ^ $b);
#Retorna: int(1), ou seja, true, pois apenas um dos operandos é verdadeiro;
?>