<?php

/** 
 * Nesta seção de estudos iremos conhecer alguns conceitos básicos acerca do PHP.
 * 
 * O que é PHP?
 * 
 * PHP é uma linguagem de programação que foi criada em 1994, e deste então vendo sendo atualizada e aperfeiçoada.
 * 
 * Para que possamos escrever o código em PHP, precisamos escrever na primeira linha a seguinte informação: <?php. Desta forma, estaremos explicitando que o código abaixo irá ser em PHP. Caso, no arquivo em questão, não haja mais nenhum outro código, de outra linguagem ou tecnologia, não é necessário informar o sinal de fechamento do código. Mas caso haja em um mesmo arquivo o código PHP e, por exemplo, código em HTML, é necessário, informar, após a finalização do código em PHP, o sinal de fechamento do código, o qual é o seguinte: ?>.
 * 
 * Em uma situação onde desejamos que seja mostrado na tela para o usuário alguma informação, necessitamos utilizar uma palavra chave a qual define que o conteúdo após ela será mostrado em tela. Esta palavra chave é echo. Após ela, podemos adicionar algum número, um texto, ou até mesmo uma variável.
 * 
 * Outra informação importante sobre o PHP, é que sempre ao fim do código, devemos adicionar o ponto e virgula. Caso contrário, ocorrerá erro.
 * 
 *  Vejamos abaixo alguns exemplos para compreendermos melhor.
 */

$nomePessoa = "José";

echo $nomePessoa;

?>