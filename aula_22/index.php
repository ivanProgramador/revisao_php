<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional</title>
</head>
<body>

  <?php
    /*
     Um array multimensional pode guardar quantos sub arrays forem necessários dentro dele 
     por exemplo no array lista coisas eu tenho uma lista de pessoas e uma lista de frutas.
    */


    $lista_coisas = [];
    $lista_coisas['frutas']  = array(1=>'Banana','Maça','uva','Morango');
    $lista_coisas['pessoas'] = array(1=>'joão',2=>'josé',3=>'Maria');

    echo"mostrando todo o array lista coisas";
    echo'<pre>';
    echo print_r($lista_coisas);
    echo'</pre>';
    echo"<hr>";

    /*
      no exemplo abaixo para recuperar um indice de um array multi 
      eu so preciso especificar o nome do sub array e o indice 
    */
    echo"Recuperando dado especifico dentro de um array multi";
    echo'<pre>';
    echo $lista_coisas['frutas'][3].'<br>';
    echo $lista_coisas['pessoas'][3];
    echo'</pre>';
    echo"<hr>";




  
  
  ?>
    
</body>
</html>