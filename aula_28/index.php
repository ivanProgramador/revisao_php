<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com loops</title>
</head>
<body>


   <?php 
   
     $registros = array('Comercio de ferias','Publico animado','Superlotação turisca','Como está o Dolar ?');

     /*
     Para usar um loop é necessario ter uma variavel que controla essa repetição
     no casso eu vou yusar a $idx que vale 0 inicialmente  
     */

     $idx = 0;
     
     /*
      O array de registros possui 4 indices então apara que possa usar o looop para ler os 4 
      eu vou colocar a seguinte condição:
      
      enquanto $idx for menor que 4 continue executando  a acada loop ele adicona mais um ao $idx 
     */

     while($idx < 4){

        echo $registros[$idx]; //a cada loop o valor do $idx recebe 1 então com base novalor dele eu faço uma conmsulta nos indices do array 

        echo'<hr>'; // depois eu mostro uma linha para separa os lementos da lista 

        $idx ++; // eu adiciona 1 ao $idx

        //fazendo o loop mostrar uma lista na tela
         
     }
     
   
   ?>
    
</body>
</html>