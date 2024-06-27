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
       O algoritmo abaixo informa se uma pessoa pode dora sangue ou não
       regra do algoritmo.
       
      1 - para que um pessoa possa fazer a doação ela deve ter uma idade entre 16 e 69 anos
      2 -  para que um pessoa possa fazer a doação ela deve ter um peso igual ou maior que 50 kilos 
      
      */
      

      $nome_pessoa1 ='José'; 
      $idade_pessoa1 = 50;
      $peso_pessoa1 = 70;

      $nome_pessoa2 ='Maria'; 
      $idade_pessoa1 = 15;
      $peso_pessoa1 = 40;

      


      if($idade_pessoa1 >= 16 ){

        echo $nome_pessoa1."Tem a idade ideal";

          if($peso_pessoa1 >= 50){

            echo $nome_pessoa1."Tem o peso ideal";

          }else{

            echo $nome_pessoa1.'não pode doar porque não tem o peso necessário';
          }

      }else{
         echo $nome_pessoa1.'não pode doar porque não tem a idade';
      }






    ?>
    
</body>
</html>