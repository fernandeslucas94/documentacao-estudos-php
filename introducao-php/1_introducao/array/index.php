<?php 

/**
 * Nesta seção de estudos, iremos conhecer os conceitos relacionados à arrays. 
 * 
 * O que são arrays? 
 * 
 * São estruturas das linguagens de programação, as quais possibilitam que sejam armazenados valores e que posteriormente poderão ser utilizados em momentos específicos da aplicação. De uma forma superficial, podemos fazer uma analogia com banco de dados. Os arrays armazenam dados e informações, que podem ser acessados, manipulados e utilizados para fins específicos durante a execução do software.
 * 
 * É possível armazenar dados de diferentes tipos, como, por exemplo, Number e String. Pode-se armazenar dados de uma mesmo tipo, como também é possível, dependendo da necessidade, armazenar dados de tipos distintos.
 * 
 * Uma particularidade do PHP, é que é possível utilizar uma abordagem chamada de array associativo. Com ela, podemos dar "apelidos" para os indices, ou seja, as posições do array, os quais, usualmente, são identificados por números, iniciando em zero, e após isto, podemos definir qual o valor de cada posição. Veremos abaixo um exemplo do uso do array associativo.
 * 
 * Para que possamos utilizar o array, devemos declarar uma variável e após o sinal de atribuição de valor, devemos colocar colchetes. Dentro dos colchetes, iremos adicionar os valores que serão armazenados.
 * 
 * Vejamos abaixo exemplos da declaração e uso de arrays.
 */


// Declaração "normal" de um array.
$nomes = ["João", "Marina", "Pedro", "Ana"];


// Declaração de array utilizando o conceito do array associativo.

// Neste caso, apesar de usarmos os nomes que forma armazenados como valor no array $nomes, eles são somente os "apelidos" para cada uma das posições, ou indices. Os valores, em si, são os números que informam quantos carros cada pessoa tem.
$nomesCarros = [
    "João" => 1,
    "Marina" => 2,
    "Pedro" => 3,
    "Ana" => 4 
];
