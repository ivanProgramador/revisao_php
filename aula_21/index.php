<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
  /*
   Arrays são variaveis que possuem espaçoes capazes de guaradar mais de um valor 
   cada valor é armezenado dentro de um indice, um array pode ter um numero ilimitado de 
   indices. 
   
   cada dado armazenado possui um indice associado a ele é assim que podemos recuperar os 
   dados armazenados, 
  */

  $lista_frutas = array('Abacate','Banana','Caju','Graviola');

  /*
    Para visualizar os dados e as posições dos dados dentro do array sem usar estrtutras de repetição
    Existem duas opções  

    1 - var_dump($lista_frutas); -> além de mostrar o numeo dos indices ainda mostra o tipo de cada um 
    2 - print_r(); -> esse mostra o conteudo eo numero de cada indice. 
  */
  echo"Lendo array com var_dump <br>";
  echo"<pre>";
    var_dump($lista_frutas);
  echo"</pre>";
  echo"Lendo array com print_r <br>";
  echo"<pre>";
  print_r($lista_frutas);
  echo"</pre>";

  /*
   Adicionando dados em uma Array, autoamticamente sera criado um novo espaço no array
   para alocar o novo dado   
  */
  $lista_frutas[] = 'Morango';

  echo"Novo item adicionado <br>";
  echo"<pre>";
    var_dump($lista_frutas);
  echo"</pre>";
 
  /*
    Consultando o array para ver um unico item dele 
  */

  echo'Mostrando somente o item que esta na posição 2 : <br>'.$lista_frutas[2];

  /*
  Indices associativos
  
  Por padrão quando um, array é criado ele numera as posições e organiza os dados de forma sequencial,
  porém os arrays do tipo associativos nos permitem criar as nossas proprias posições no aray abaixo eu coloquei 
  letras mas é possivel criar associar com outros tipos de indice.
  
  Por isso ele se chama associativo porque é possivel criar as proprias chaves de associação nesse tipo de array
  
  */

  $lista_frutas = array('a' =>'Abacate', 'b' => 'Banana', 'c' =>'Caju','d'=>'Graviola');

  echo"Lendo array associativo <br>";
  echo"<pre>";
    var_dump($lista_frutas);
  echo"</pre>";



?>
    
</body>
</html>