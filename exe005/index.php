<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>

<?php

  // String -> cadeia de caracteres que fica dentro de aspas
  $nome = 'Silva';

  //int ou integer e a representção de numeros inteiros 
  $idade = 34;

  // float, double ou (real)->'esse tipo so pode ser usada no php até a versão 7.4 ' são numeros qua possuem casas decimais que servem para representar
  //numeros fracionados 
  
  $peso = 85.4;

  // tipo booleam so aceita true e false
  
  $casado = false;

  /*
  Tipos primitivos especiais 

  null -> mesmo sendo nulo ele continua sendo um valor, então ao prencher uma variavel com tipo null ela não está vazia   
  resource -> 
  callab -> 
  mixed -> 

 Tipos primnitivos compostos
 

 Array -> um array tem varios indices qua podem abrigar variaveis de todos os tipos, 
          $vet = [1,"jose", null, 2.50,2e3];
          o conteudo de um array não pode ser mostrado pelo echo para mostrar ele tem que usar o var_dump() 
          ou um fluxo de repetição para percorrer os indices e mostrar na tela 


 Object -> 

  */
?>

<h2>Testes de tipos primitivos</h2>

<?php

 // 0x = hexadecimal 0b = binario 0 = octal 
 //$sum = 010;
 // echo"Ovalor da variavel é $num";

/*quando um varivel ou sseu valor não pode ser identificado
  pelo desenvolvedor por algum motivo existe uma função nativa 
  chamada var_dump() quando uma variavel é colocada como parametro dessa
  função. Ela vai depurar mostrando tipo primitivo, quantidade de caracteres 
  e os dados que ela contém por exemplo eu vou depurar uma string abaixo mas ela
  depura qualquer variável de qualquer tipo em php    
*/

// $nome = 'ivan';
// var_dump($nome);

/*

*/









?>
</body>
</html>