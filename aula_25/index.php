<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops While</title>
</head>
<body>

  <?php

     /*
      While significa enquanto então um loop desse tipo executa uma determinada ação 
      enquanto uma condição for verdeira e para quando ela não for mais.

      A condição abaixo estabele qua a varivel  $numero vale 1 no while esta sendo feito um teste,
      para comparar ela ao numero 10 então no loopp se estabelece que enq8uanto ela for menor que 10 
      ele vai fazer 2 coisas 

      1 - mostrar o valor 
      2 - acrescentar mais 1 ao valor da variavel
      
      e acada teste o numero vair ficando maior até aque ele chegue a 10 e pare o loop proque a condição de ser menor que 10 
      vai deixar de ser verdade, e é assim qe o while funciona.

      
     $numero = 1;

     echo"Inicio do Loop <br>";

     while($numero < 10){

         echo $numero.'<br>';

         $numero ++;
     }

     echo"final do Loop <br>";



     Parando o loop 

     Existe uma instrução chamada break; que consegue para o loop mesmo antes dele atender a confdição estabelecida de parada,
     um desenvolvedor pode ter varios motivos para parar o loop, pode ser para direcionar a execução para outro loop ou excecutar 
     alguma função antes de continuar.


      $numero = 1;

     echo"Inicio do Loop <br>";

     while($numero < 10){

         echo $numero.'<br>';

         $numero ++;

         break;
     }

     echo"final do Loop <br>";


     
     
     

      
      

     */

  
     $numero = 1;

     echo"Inicio do Loop <br>";

     while($numero < 10){

         echo $numero.'<br>';

         $numero ++;
     }

     echo"final do Loop <br>";
  
  ?>
    
</body>
</html>