<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando com loops</title>
</head>
<body>


   <?php 
   
     $registros = array(
        array('Titulo'=>'Titulo noticia 1','Conteudo'=>'Conteudo noticia 1'),
        array('Titulo'=>'Titulo noticia 2','Conteudo'=>'Conteudo noticia 2'),
        array('Titulo'=>'Titulo noticia 3','Conteudo'=>'Conteudo noticia 3'),
        array('Titulo'=>'Titulo noticia 1','Conteudo'=>'Conteudo noticia 1'),
        array('Titulo'=>'Titulo noticia 2','Conteudo'=>'Conteudo noticia 2'),
        array('Titulo'=>'Titulo noticia 3','Conteudo'=>'Conteudo noticia 3')
       
     );

     /*
     Para usar um loop é necessario ter uma variavel que controla essa repetição
     no casso eu vou yusar a $idx que vale 0 inicialmente  
     */

     $idx = 0;
     
     /*
      O array de registros possui 4 indices então apara que possa usar o looop para ler os 4 
      eu vou colocar a seguinte condição:
      
      enquanto $idx for menor que 4 continue executando  a acada loop ele adicona mais um ao $idx 
     */

     /*
     while($idx < 4){

        echo $registros[$idx]; //a cada loop o valor do $idx recebe 1 então com base novalor dele eu faço uma conmsulta nos indices do array 

        echo'<hr>'; // depois eu mostro uma linha para separa os lementos da lista 

        $idx ++; // eu adiciona 1 ao $idx

        //fazendo o loop mostrar uma lista na tela
         
     }
      */

      /*
       Arrays multidimensionais  
      */

      //para contar de forma dinamica os indices existentes dentro de um array exiSte a função count() eu vou usar ela para retornar para min quantos indices existem dentro do array 
      
    //  echo 'O Array possui : '.count($registros).' indices <br>';


      //EXECUTANDO O WhILE COM BASE NO VALOR CONTADO DE INDICES 
     /* while($idx < count($registros)){

         echo'<h3>'.$registros[$idx]['Titulo'].'</h3>'; // mostrando o titulo no indice titulo 
         echo'<p>'.$registros[$idx]['Conteudo'].'</p>'; // mostrando o conteudo no indice conteudo 
         echo'<br>';

         $idx ++; //] acada loop o $idx recebe 1 então cada inice e consultado com base no valor dele a cada loop 

           
      }
         
      */

      for($idx = 0; $idx < count($registros);$idx++){

         echo'<h3>'.$registros[$idx]['Titulo'].'</h3>'; // mostrando o titulo no indice titulo 
         echo'<p>'.$registros[$idx]['Conteudo'].'</p>'; // mostrando o conteudo no indice conteudo 
         echo'<hr>';

          

         


      }

     


      
      
     
   
   ?>
    
</body>
</html>