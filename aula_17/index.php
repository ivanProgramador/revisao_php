<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
  <?php
    /*

     Funções são blocos de código que executam uma ação especifica, um sistema e composto 
     por varias funções, o funcionamento correto de um sistema depende de executar essas funções
     na ordem correta.

    */

    //função sem retorno executa o processo más não retorna nada  
    function exibirBoasVindas(){
        echo'Bem vindo ao curso de php';
    }

    //função com retorno executa o processo e retorna o resultado dele 
    //a função abaixo recebe os parámetros faz um calculo entre eles e retona o resultado 

    function calcularAreDeTerreno($largura,$comprimento){

        $area = $largura  * $comprimento;

        return $area;
    }

    /*
     Usando as funções 
    */
    //exibir boas vindas 

    exibirBoasVindas(); // essa vai mostrar a frase
    
    //ja a funçao calcularAreDeTerreno para exbir alguma coisa ela precisa de parametros 
    // que no caso são a largura e comprimmento de uma terrreno para poder calcular  a area 
    //nesse caso eu atribui o retono dela a uma varivel 

   $resultado = calcularAreDeTerreno(30,20);
   
   // exibindo o retorno dela 

   echo $resultado; 


  ?>    


</body>
</html>