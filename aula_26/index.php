<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Do while</title>
</head>
<body>

 <?php

   /*
     No caso o do while lé a instrução primiero depois verifica se condição ainda é verdeira,
     esse tipo de loop garante que seja qual for o codigo dentro dele esse codigo será executado pelo menos 
     uma vez.

     Diferente do while que preimiero verifica a condição e depois executa 

     Em relação ao usaio de 'continue' e 'break' ele aceita normalmente   
   */


   $x = 1;

   do{

      $x++;

      echo $x.'<br>';

   }while($x < 9);
 
 
 ?>
    
</body>
</html>