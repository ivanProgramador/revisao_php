<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando foreach</title>
</head>
<body>

   <?php

      //cada funcionario é um array com duas posições

       $funcionarios = array(

         array('nome'=>'Ana','salario'=>1000,'data_nascimento'=>'20/07/2020'),
         array('nome'=>'Bruno','salario'=>2000,'data_nascimento'=>'20/08/2021'),
         array('nome'=>'Carlos','salario'=>2500,'data_nascimento'=>'20/09/2022'),
         array('nome'=>'Daniel','salario'=>3000,'data_nascimento'=>'20/10/2023')

       );

       //mostrando o array 

       echo'<pre>';
       print_r($funcionarios);
       echo'</pre>';


       /*
        quando existe  " $idx => $funcionarios " dentro do paramentro de um foreach a varivel $idx vai assmuir o valor dass posições 
        e a segunda variavel $funcionarios assume oque tiver dentro dos indices so que nesse caso eu estou lendo um array de dois indices 
        no pirmiero foreach ele vai pércorrer o array pegar os ids e os nomes deos funcionarios.
        
        No segundo foreach vai pegar os ids e os salarios, como o foreach é um loop inteligente se o funcionario receber mais 
        atributos ele esta pronto para exibir sem que seja neceaarios mexer no codigo do loop  
       */

       foreach($funcionarios as $idx => $funcionarios){

           foreach($funcionarios as $idx2 => $valor){
                echo"".$idx." - ". $valor."<br>";
            }
            echo'<hr>';
       }


   
   ?>
    
</body>
</html>