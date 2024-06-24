<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    
   <?php
     /*
      O motivo para uma requisição é geralemente obter dados dinámicos 
      para que esses dados possam ser obtidos junto com os elementos da página eles precisam ser concatenados
      com os elementos ou com outras variáveis
      
      Abaixo um exemplo de como usar a concatenação com variáveis php 
      Coloquei o <br> que é um tag html e também as variáveis para demonstrar as possibilidades de concatenação  
     */

     $nome = 'Jorge';
     $esporte ='Pedalar';
     $cor = 'Azul';
     $idade = 35;

     echo"Sr".$nome." <br> notei que o seu esporte preferido é ".$esporte."<br> e sua bike e da cor ".$cor."<br> e o Sr prática esse esporte
          desde os ".$idade;
   
   ?>


</body>
</html>