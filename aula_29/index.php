<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Foreach</title>
</head>
<body>
    <?php


      $itens = array('sofá','mesa','cadeira','fogão','geladeira');

      /*
        Em um loop como o foreach as condições de para e o contador 
        ja estão implicitos por isso e desnecessaria a declaração dos mesmos
        no caso eu so preciso do array que vai ser percorrido e da variavel que vei receber os dados 

        $itens -> eo array 
        $item -> recebe os dados       
      */

      foreach($itens as $item){

         echo"$item <br>";
         
         //caso o iten seja mesa ele vai mostrar essa mensagem
         if($item == 'mesa'){

             echo(' * compre uma mesa e ganhe 25% na compra de 4 cadeiras');
         }


      }
    ?>
</body>
</html>