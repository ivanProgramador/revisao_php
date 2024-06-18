<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
 <main>
 <?php
    //,cotação do dolar 
    $cotacao = 5.41;

    //quantos reais você tem ?
    $real = $_POST['din'] ?? 0;

    //equivalencia em dolar 
    $dolar = $real / $cotacao;

    //mostrando resultado usando a number format para informar somente duas casas decimais apos a virgula 

    /*
    Sobre a função number_format() 
    Nesse caso estão sendo usados 4 parametros para a função number_format()

     1 - valor que sera formatado
     2 - a quantidade de casas decimais que eu desejo que apareçam 
     3 - serador decimal que no casso e a virgula  
     4 - separador de milhar que no caso e o ponto

    Essa função é util para mostrar dados numericos em sistemas brasileiros porque aqui nos usamos virgula 
    mas vale ressaltar que isso formata o valor de saida e não serve para calculo  
    
    
     echo"Seus R\$ ".number_format($real,2,",",".")." equivalem a US\$ ".number_format($dolar,2,",",".");
    
    */

    /*
     Formatação avançada com internacionalização 
     Sobre a função 
     
     numfmt_format_currency($padrao,$real,"BRL")

     Essa função recebe 3 parametros 

     1 - a configuração de formatação que eu coloquei em outra função chamada
         como o nome ja diz ela cria uma formatação que no primiero parametro eu disse que seria "pt_BR"
         no segundo eu disse que seria um formatação financeira usando uma classse interna dela chamada CURRENCY.
         e coloquei essa formatação dentro de uma variavel chamada $padrão  

         " numfmt_create("pt_BR",NumberFormatter::CURRENCY);"

         que passei como parametro 1 da função numfmt_format_currency()

      2 - o segundo paratro dela contem o valor que sera formatado qwue no meu caso eo $real 
      
      3 - por fim o terceiro parametro indica para que pais ela vai ser exibida, a sigla intrernacional do real
          e BRL então essa sigla deve ser passado no terceiro parametro.
          
    ATENÇAO: se essa função não rodar e ela tem que ser habilçitada pelo ini do php, e so char a linha 

    extesion= intl 

    e tirara o comentario dela para poder habilitar 

    
    */

    $padrao = numfmt_create("pt_BR",NumberFormatter::CURRENCY);

    echo"Seus ". numfmt_format_currency($padrao,$real,"BRL")." equivalem a : ".numfmt_format_currency($padrao,$dolar,"USD");

   
    
    




 ?>




 </main>
 
 <a href="http://localhost/revisao_php/desafio003/">Voltar</a>
    
</body>
</html>