<?php
# Um array no PHP é na verdade um mapa ordenado.
# Um mapa é um tipo que relaciona valores à chaves.
# Este tipo é otimizado para vários usos diferentes:
# ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais.
# Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.

# Um array pode ser criado com o construtor de linguagem array() ou por [].
# Ele leva qualquer quantidade de pares separados por vírgula chave => valor como argumentos.

/**

 * array(
    chave  => valor,
    chave2 => valor2,
    chave3 => valor3,
    ...
)

*/

$array1 = array(
    "dev" => "Navelogic",
    "group" => "Senac"
);

// Ou se você quiser um jeito mais simples de instanciar um array:

$array2 = [
    "dev" => "Navelogic",
    "group" => "Senac"
];

# Mostramos dois jeitos de declarar arrays e os dois estão certos, porém usando [] é um jeito mais simples de expressar um array.
# Agora vamos para outro exemplo de como ficaria se você não colocasse chaves nos seus arrays:

$array3 = array(
    "Navelogc",
    "Senac"
);

$array4 = [
    "Navelogic",
    "Senac"
];


#print_r Mostra a saida no console
print_r ($array1);
print_r ($array2);
print_r ($array3);
print_r ($array4);
print_r ($array1['dev']);
?>