<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de strings</title>
</head>
<body>

   <?php
    /*
     No php exsitem 4 tipos de strings 
     
     1 - Double quoted 
     2 - Single quoted
     3 - Heredoc 
     4 - Nowdoc
     
    Qual ea diferença entre usar as pas duplas e aspas simples
    a string abaxo tem um escape e um codigo que mostra o simbolo de um elefante do lado
    
    quando a string abaixo for exibida pelo php ela vai interpretar o codigo e mostrar o elefante
    porque as aspas duplas dizem ao php que ele deve ler a string e ainda intepretar qualquer codigo
    que tiver dentro dela que ele conheça. 

    "PHP\u{1F418}"

    A string abaixo tem as pas simples então isso diz a o php que essa string deve ser exibida exatamente 
    como esta escrita e ele não deve interpretar nenhum codigo então ao inves de aparecer o elefante vai 
    aparecer somente o codigo exadecimal que representa o elefante e claro a sigla php tambem. 
 
    'PHP\u{1F418}'

    Concatenação 

    No php para contenar strings basta colocar um ponto entre elas 

    $nome = "Maria";
    $sobrenome = "Clara";

    echo "seu nome e: ".$nome.$sobrenome;

    Agora a concatenação de constantes exige as passs simples porque constantes não tem o simbolo $ na frente 
    então não tem como o php saber que se trata de uma variavel com dados que devem ser exibidos para que ele possa 
    identificar isso é necessarios usar as aspas duplas 

    const ESTADO = 'CE';

    echo"Você mora no : ".ESTADO;

    concatenando resultado de funções a função data retrona um resultado que precisa ser interpretado 
    então eu uso aspas duplas e o ponto

    echo"A DATA DE HOJE É : " . date('y');

    O uso de aspas dentro de aspas 
    Nomelamentye a seintaxe abaixo não e usada mas eu vou colocar aqui porque futuramente eu poso achar 
    alguma situação onde isso seja necessario

    echo"$variavel1 \"texto\"  $variavel2";

    Sequencia de escape para strings 

    \n -> nova linha 
    \\  -> para mostrar barra ivertida do lado da string
    \$  -> para mostrar o simbolo $ sem que o PHP pense que se trata de uma variavel
    \u{} -> code point unicode para mostrar emogis tem que colocar o codigo entre chaves 
    \t   -> tabulação


    string Heredoc trata-se de uma string que se divide em varias linhas por exemplo 
    a palavra teste funciona como um identificador dessa string então ela começa 
    na linha onde tem '<<< TESTE' e tem que ter 'TESTE;' para sinalizar o final dela 
    esse tipo de string é pouco usada.   
    
    echo <<< TESTE

            Esse é um conteudo de uma
            String do tipo 
            heredoc e vai aparecer formatada 
            exatamnente como eu 
            estou escrevendo 

         TESTE;

    No teste o php 8.2 não mostrou a formatação dela mas exibiu o conteudo


    string Nowdoc tem duas diferenças da heredoc
    1 - ela tem aspas simples no identificador 
    2 - ela não consegue intepretar codigos unicode então ela mostra exatamento qioeu esta sendo escrito 

      echo <<< 'TESTE' 

            Esse é um conteudo de uma
            String do tipo 
            heredoc e vai aparecer formatada 
            exatamnente como eu 
            estou escrevendo 

         TESTE;

    acredito que a versão php 8.2 não reconheça mais esse tipo porque ela deu erro 


    
    
    */ 



    

   
   

     
   ?>
    
</body>
</html>