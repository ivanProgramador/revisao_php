<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para manipular string</title>
</head>
<body>

  <?php 

    /*
     
     O tipo string é um tipo de variável diferente dos outros tipos, porque não se trata de tipo primitivo,
     como int, booleam por exemplo, quando se diz que uma variavel é uma string, estamos atribuindo a ela a classe 
     string e essa classe possui varias funções,nesse caso eu vou miostrara 6 delas porém existem varias outras 
     
     1 - strtolower($palavra); -> serve para transformar todos os caracterees em minusculos 

     2 - strtoupper($palavra); -> serve para transformar todos os caracterees em maiusculos 

     3 - ucfirst($palavra);    -> serve para transformar penas a primeira letra da palavra em maiuscula

     4 - strlen($palavra);     -> serve para contar quantos caracteres a palavra tem.

     5 - str_replace(<procura por>,<substitui por>,$palavra); -> serve para substituir um oumais carateres dentro de uma palavra,
         normalemnte ela ée usada apara trocar ponto por virgula.

     6 - substr($palavra, <posicao_inicial>, <quantidade de letras>); -> retorna somente um pedaço especifico da palavra    
    */

    $texto = 'Curso de PhP';
    $texto2 = 'curso de php texto minusculo';
    $valor = '28.50';

    //strtolower($texto);
    echo'texto normal : '.$texto.'<br>';
    echo strtolower($texto).'<br>';
    echo'<hr>';

    //strtoupper($palavra);
    echo'texto normal : '.$texto.'<br>';
    echo strtoupper($texto).'<br>';
    echo'<hr>';


    //ucfirst($palavra); criei a varivel $texto2 toda minuscula para poder testar essa função 
    echo'texto normal : '.$texto.'<br>';
    echo ucfirst($texto2).'<br>';
    echo'<hr>';


    //strlen($palavra); essa função retona 28 porque eo numero de caracteres que tem nessa string incluido os espaçoes em branco
    echo'texto normal : '.$texto.'<br>';
    echo strlen($texto2).'<br>';
    echo'<hr>';


    //str_replace(<procura por>,<substitui por>,$palavra); nesse caso eu usei para trocar o ponjto pot viorgula 
    echo'o valor com ponto : '.$valor.'<br>';
    echo 'O valor com virgula : '.str_replace('.',',',$valor).'<br>';
    echo'<hr>';


    //substr($palavra, <posicao_inicial>, <quantidade de letras>); no caso ele vai mostrar somente os caracteres do indice 0 ate o 8
    // no caso essa função transforma a string em um array por isso a primeira letra fica no indice 0   
    echo'texto normal : '.$texto.'<br>';
    echo substr($texto2,0,8).'<br>';
    echo'<hr>';





















  
  ?>
    
</body>
</html>