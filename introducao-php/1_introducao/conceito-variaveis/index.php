<?php

/**
 * Nesta seção de estudos iremos conhecer os conceitos sobre variáveis.
 * 
 * O que são variáveis?
 * 
 * Variáveis são estruturas da linguagem de programação, as quais armazenam algum tipo de dado que poderá ser acessado posteriormente. No PHP, para que possamos declarar uma variável, antes de informar o nome, devemos adicionar o sinal de cifrão, $. 
 * 
 * Algumas particularidades das variáveis são que, elas não podem começar com letra maiúscula, não podem começar com números, somente letras, não podem conter palavras chave da linguagem. O nome da variável, quando for composto, não poderá ter espaços, deverá ser escrito no estilo camelCase ou snake case, como por exemplo: camelCase -> $joaoDaSilva; Já no caso do snake case, podemos ter o exemplo: $joao_da_silva;
 * 
 * Os dados contidos nas variáveis, como o próprio nome diz, pode variar. Pode-se declarar uma variável com um determindo valor, porém, em um momento posterior da aplicação, pode-se alterar o valor da variável para outro que seja desejado.
 * 
 * As variáveis somente podem conter núemros, letras e underline (sublinhado).
 * 
 * Vejamos abaixo alugns exemplos de declaração e utilização de variáveis.
 */

// Declaração da variável no estilo camelCase
$possuiRegistro = true;

// Alteração do valor da variável
$possuiRegistro = false;

// Declaração de variáveis e atribuição de valor
$nome = "João";
$sobrenome = "da Silva ";
$nomeCompleto = "$nome $sobrenome";

// Exemplo de snake case
$aluno_esta_matriculado = true;

// Formas que podemos escrever o nome da variável
$_variavel1;
$variavel2;
$umaVariavelQualquer;
$uma_variavel_qualquer;