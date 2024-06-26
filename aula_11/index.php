<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionais if else</title>
</head>
<body>
    
  <?php
    /*
     Um fluxo de decisão é uma parte muito importante da lingugem de progrmação porque 
     é usando esse fluxo que o o processador decide oque vai fazer em seguida
     no codigo abaixo eu vou mostrar como usar o fluxo if else em php 
    */

    $a = 'a';
    $b = 'b';
    $numero = 1;
    $segundo_numero = 2;
    $numero2 = '1';
    $fumante= false;

    //O primeiro caso está comparando duas strings nesse caso vai dar verdadeiro porque as duas tem o mesmo valor   
    if($a == 'a'){ echo'Verdadeiro'; } else {echo'Falso'; }
     
    // aqui vai ser falso porque o valor que esta na varivel b é diferente da string ao quel ela esta sendo comparada 

    if($b == 'a'){ echo'Verdadeiro'; } else {echo'Falso'; }

    //aqui o resultado será verdeiro porque embroa a verivel numero 2 seja uma string o nuemro 1 que esta dentro dela 
    //esta sendo considerado pelo php    

    if($numero2 == 1){ echo'Verdadeiro'; } else {echo'Falso'; }

    // aqui o resultado será falso porque embrora o valor contidop dentro da string seja o mesmo o operador === esta 
    // comparando 2 coisas tipo eo valor e como o tipo string e diferente do tipo int o resultado será falso  

    if($numero2 === 1){ echo'Verdadeiro'; } else {echo'Falso'; }

    //Usando operadores de comparação 
    //na linha abaixo estou comparando 2 numeros 

    if($numero > $segundo_numero){echo'É maior';}else{echo'É menor';}

    //fluxo aninhado 
    //aqui as variveis passam por dois testes esse fluxo aninhado é util para validação de valores 
    //testando se os numeros são iguais 
    if($numero == $segundo_numero){
       
        echo'O valor e igual';

       //se form iguais eles vem para essa outra comparação para testar se são identicos em tipo tambem 
        if($numero === $segundo_numero){

            echo'O valor e o tipo são iguais';

        }else{

            echo'O valor é igula más o tipo não';    
        }

    }else{
        echo'Não existe semelhança';
    }


    //usando operadores lógicos
    /*
     Aqui ele tem o mesmo funcionamento de uma operação matemática
     que resolve primniero oque tem entre parenteses ,  nesse caso 
     ele compara 
        se 22 == 22 
         e se 3 == 3 o resultado é verdadeiro
         
    ou seja dentro do parenteses eu tenho uma expressão verrdadeira que eu vou comparar 
    com a outra expressão que verifica se 5 e diferente de  5 
    como não é então ela é falsa então aqui eu tenho 
    v e f 

    Estou usando || que signfica OU então se eu tenho uma expressão verdadeira e outra falsa
    o resultado final é verdadeiro porque para o operador ouu se uma possibilidade for verdeira então 
    o resultado é verdadeiro

    */ 

    if((22 == 22 && 3 == 3 ) || 5 != 5 ){ echo' verdadeiro';}else{ echo'falso';}


  

   

    

  
  
  ?>
</body>
</html>