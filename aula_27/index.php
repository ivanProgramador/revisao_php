<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loops for</title>
</head>
<body>

 <?php
 
   /*
     para funcionar o for precissa de  3 parameetros 

     1 - a variavel que determina quantas vezes ele sera executado
     2 - qual e condição que vai fazer eele continuar executando 
     3 - a varivel de incremento que manipula a condição de execução
     
     o fluxo 

     1 - ler a veriavel x
     2 - verifica se ela é igual ou menor que 10 
     3 - se  ela for acresecenta mais 1 a varivel + 
     4 - quando ela atigir 10 o loop para 


      for($x = 1;$x <= 10; $x++){
           echo $x.'<br>';
     
       }

   */

   for($x = 1;true; $x++){

     echo $x.'<br>';

     // controlando o loop por dentro 
     if($x = 2 ){

         break;
     }
     
   }
 
 ?>
    
</body>
</html>