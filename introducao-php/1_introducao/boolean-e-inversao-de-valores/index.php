<?php

/**
 * Nesta seção de estudos, iremos conhecer conceitos relacionados à lógica binária, ou lógica booleana. Além disso, iremos conhecer também a estratégia de inversão de valores no PHP.
 * 
 * O que é a lógica binária, ou booleana? Elá é a estratégia que podemos utilizar em situações onde devemos veriicar se um valor é verdadeiro ou falso. Ela utiliza apenas dois valores: true (verdadeiro) e false (falso). Neste caso, para o valor verdadeiro, o PHP irá retornar para a aplicação o valor numérico 1, e caso seja falso irá retornar o valor 0. Por isto, lógica binária, ou seja, 0 ou 1.
 * 
 * Podemos utilizar valores booleanos, em casos onde desejamos verificar se um valor ou uma condição é verdadeira ou falsa. Como por exemplo, em uma situação onde precisamos verificar se um usuário do sistema possui cadastro. Caso seja verdadeiro, algo ocorrerá. Caso seja falso, outra coisa irá ocorrer.
 * 
 * Podemos ver abaixo alguns exemplos para compreendermos melhor.
 * 
 */


$possuiCadastro = true;

if($possuiCadastro) {
    echo "Poderá realizar login";
} else {
    echo "Não poderá realizar login. Efetue cadastro.";
}


// No exemplo acima, podemos verificar outra particularidade da lógica booleana. Ao realizarmos a verificação, caso o valor seja verdadeiro, não é necessário, dentro dos parênteses, adicionar os sinais de igual (==) e o valor true. Por padrão, na verificação, o valor é true. Somente em casos onde precisamos verificar se o valor é falso, adicionamos os dois sinais de igual e a palavra false, como no exemplo: if ($possuiCadastro == false) {...}.


/**
 * Outro ponto importante da lógica booleana, é que podemos efetuar a inversão do valor da variável. Caso seja verdadeiro, passa a ser falso, e vice versa. Para isto, adicionamos antes do sinal de cifrão, o ponto de exclamassão. Desta maneira, estaremos alterando o valor padrão da variável, sem alterar diretamente no local onde ela foi declarada.
 * 
 * Veremos abaixo um exemplo deste uso.
 */


$maiorDeIdade = true;

if(!$maiorDeIdade) {
    echo "Infelizmente você não poderá entrar!";
} else {
    echo "Você poderá entrar!";
}

// No exemplo acima, na declaração da variável, ela foi declarada com valor true, ou seja, verdadeiro. Na verificação, ao adicionar o ponto de exclamassão, estamos verificando se, na verdade, ela é falsa. E isto podemos não somente realizar dentro de uma verificação. Podemos também, inverter o valor da variável, em outro momento do código da aplicação.