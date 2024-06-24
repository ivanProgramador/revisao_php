

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 /*
  Variaveis em php 
  
  O php é um liguagem que exige algumas regras para declaração de variaveis como qualquer outr linguagem
  
  1 - Para que interpretador reconheça a variável declarada ela deve iniciar com o simbolo '$' exemplo: $nome

  2 - O nome de um variável não pode conter espaços ou caracteres especiais(com excessão do undeline) exemplo: $_nome

  3 - O php 8.2 até permite que o nome de variveis tenha ascentos porém isso não é uma boa prática porque como não se 
      sabe em que versão o php que está no servidor web estará então é melhor seguir o padrão.   

  4 - O php é uma linguegem case sensitive isso significa que ele considera letras maiusculas e minusculas na declaração
      de variáveis ou seja ' $Nome ' é uma variável diferente de ''$nome'

 */

?>

<?php
  /*
   As variveis em php recebem o tipo confiorma o valor que é atribuido a elas,
   por exemplo a averivel nome é uma string porque eu coloquei uma cadeia de caracteres nela 
   então eu posso dizer que o php é uma linguagem fracamente tipada.  

  */

  //string
  $nome = 'Jorge Sant Ana';

  //int
  $idade = 29;

  //float
  $peso = 82.5;

  //booleam
  $fumante_s_n = false; //se for true retorna 1 se for false retorna vazio

?>


<h1>Ficha de cadastro</h1>
<p>nome: <?= $nome ?></p>
<p>idade: <?= $idade ?></p>
<p>peso: <?= $peso ?></p>
<p>fumante: <?= $fumante_s_n ?></p>


    
</body>
</html>

