<?php

/**
 * Nesta seção de estudos iremos conhecer sobre os tipos de dados primitivos no PHP.
 * 
 * Quais são os tipos de dados primitivos? No PHP, existem quatro principais tipos de dados:
 * 
 * - String => Representa valores textuais, como frases, por exemplo.
 * - Intenger => Representa números inteiros, que não possuem casa decimal.
 * - Float => Representa números, porém, neste caso, irá representar números que possuem casa decimal.
 * - Boolean => Representa valores booleanos. Ou seja, irá representar apenas dois valores: verdadeiro (true) ou falso (false).
 * 
 * Veremos abaixo de forma mais detalhada, os conceitos sobre cada um dos tipos citados.
 */


/**
 * ### STRING ###
 * 
 * O tipo string, irá armazenar valores textuais. Para isto, necessitamos adicionar os valores entre aspas. 
 * 
 * Com o tipo de dado string, podemos armazenar como valor: nomes, frases, e quaisquer outros valores textuais que desejemos armazenar. Em alguns momentos, necessitaremos utilizar o tipo string para receber como valor para determinadas variáveis, não necessariamente valores textuais. Isto ocorre, por conta de questões específicas da lógica e da regra de negócio.
 */

// Exemplos de string
$nome = "José";
$fraseAleatoria = "O dia está muito bonito hoje.";

/**
 * Ainda com relação à string, temos outros conceitos importantes os quais podemos utilizar no dia a dia.
 * 
 * ## Concatenação ##
 * No PHP, quando necessitamos concatenar, ou seja, "juntar" dois valores de variáveis, devemos utilizar o ponto (.). Ao fazermos isto, iremos, como dito anteriormente, concatenar dois valores e estes, por sua vez, irão aparecer na tela juntos, um ao lado do outro.
 * 
 * 
 * 
 * 
 * ## Função strlen() ##
 * Também podemos realizar uma operação para verificarmos quandos caracteres estão contidos em uma palavra, ou frase. Para que possamos fazer isto, podemos utilizar uma função do PHP chamada strlen(). Seu nome se origina da junção de duas palavras: str (string = texto) e len (length = tamanho). Assim, poderemos verificar qual o tamanho de uma frase ou palavra. Ao utilizamos esta função, ela irá nos mostrar quando caracteres existem na palavra, ou frase. 
 * 
 * Para que possamos utilizá-la, devemos, dentro dos parênteses, adicionar o nome da variável que desejamos verificar. Por exemplo, strlen($variavel).
 * 
 * Logo abaixo poderemos verificar um exemplo do uso da função strlen(). 
 * 
 * 
 * 
 * ## Função strpos() ##
 * Outra função que podemos utilizar no PHP é a strpos(). Semelhante à strlen(), com ela poderemos realizar uma verificação para obtermos algum dado relacionado à determinada variável que possui como valor uma string. Ao utilizar a função strpos(), obteremos a informação da posição de determinado caracter ou valor em uma string. Para utilizarmos esta função, devemos fazer da seguinte forma: strpos($variavel, "valor"). Sendo assim, devemos informar entre parênteses, inicialmente, o nome da variável que iremos verificar, e após a virgula, adicionamos o valor, ou palavra, texto que está contida na string e a qual desejamos saber sua posição. Fazendo isto, iremos obter a informação da posição na string, onde se localiza o valor informado.
 * 
 * Abaixo poderemos verificar exemplos da utilização da função strpos().
 */


// Exemplos de uso da função strlen():

$userName = "Mariana";

echo strlen($userName); // resultato: 7

echo "\n";


// Exemplo do uso da função strpos():

$nomes = "Joana, Marina, Luiz, Fábio";

$marina = strpos($nomes, "Marina");
$fabio = strpos($nomes, "Fábio");

echo "O nome Marina está na posição $marina, e o nome Fábio está na posição $fabio!";

echo "\n";



/**
 * ### NUMBER ###
 * 
 * Iremos agora conhecer melhor sobre o tipo de dado Number, com o qual, podemos utilizamos números inteiros e com casas decimais.
 * 
 * Os tipos de dados numéricos são: Integer (Inteir~s), Float (Números com casas decimais).
 * 
 * Veremos abaixo exemplos do uso do tipo Number, tanto com números inteiros quanto com casas decimais.
 * 
 * Com o tipo Number, podemos realizar diferentes operações matemáticas, tais quais: soma, subtração, multiplicação, etc...
 * 
 * Existe um peculiaridade no PHP. No caso de tentarmos utilizar um número que na verdade está sendo atribuido à variável como String, o PHP irá "tentar" transformar esta String em um número, e assim, poderá buscar realizar a operação. Porém, está não é uma prática recomendada e no caso da utilização de números, devemos sempre utilizar valores devidamente numéricos.
 * 
 * Além das operações matemáticas basicas, podemos realizar outro tipo de operação com o tipo numérico. Neste caso, é a operação para verificação se após a divisão entre dois números, haverá um valor restante. Podemos utilizar esta operação, em casos, por exemplo, para verificar se um valor é múltiplo de dois, por exemplo. Este operado é o operador Módulo, o qual é represantado pelo sinal de porcentagem.
 */


// Inteiros - Integer

$numero1 = 10;
$numero2 = 30; 

// Casas decimais - Float

$numero3 = 3.5;
$numero4 = 5.7;

// Exemplo de operações:

// Adição:
echo $adicao = $numero1 + $numero2;

echo "\n";

// Subtração:
echo $subtracao = $numero2 - $numero3;

echo "\n";

// Multiplicação:
echo $multiplicacao = $numero3 * $numero4;

echo "\n";

// Divisão:
echo $divisao = $numero2 / $numero1;

echo "\n";

// Módulo:
echo $multiploDeUm = $numero2 % $numero1;


/**
 * Ainda falando sobre o tipo Number, existem algumas funções que são interessantes em situações onde precisamos "arredondar" um valor, seja para cima ou para baixo.
 * 
 * Falaremos sobre três funções: round(), ceil() e floor().
 * 
 * ### round() ###
 * 
 * Com a função round(), para que possamos efetuar o arrendondamento do valor, precisamos passar entre os parênteses o nome da variável que contém o valor, e após isto, caso o valor seja inferior à metade, será feito o arredondamento para o valor inteiro imediatamente inferior. Caso seja maior que a metade, será arredondado para o valor imediatamente superior. Por exemplo, 2.49 = 2; 2.50 = 3.
 * 
 * 
 * ### ceil() ###
 * 
 * No caso da função ceil(), a proposta dela, é realizar o arredondamento do vlaor para cima. Ou seja, indepentende se o valor é menor, com a função ceil(), ele será arredondado para o valor inteiro imediatamente acima. Por exemplo, 2.01 irá se tornar 3. 
 * 
 * 
 * ### floor() ###
 * 
 * Já no caso da função floor(), ao contrário da função ceil(), ela irá arredondar para o valor inteiro imediatamente menor. Por exemplo, 2.99, irá ser arredondado para 2.
 */