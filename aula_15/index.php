<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipos</title>
</head>
<body>
    <?php
      /*
        Casting  de tipos 

        Basicamente trata-se de alterar o tipo de uma variável quando necessário para aplicar a ela alguma lógica
        por exemplo:

        um sistema de e-comerce por receber os dados das compra atráves de json que é um tipo de string, porém dados de compra 
        tem o preço nele não da para somar ou dividir ou mesmo aplicar decontos em strings para obter o resultado total de uma venda,
        por isso o casting é necessário.

        como funciona: 
        
        Essa variável veio como string e eu preciso somar ela

        $preco = '50.00';

        Então eu uso o casting para converter ela para float

        $preco (float) = '50.00';

        Variável convertida agora eu posso somar, mas depois de somar eu preciso retornar o valor total em string para interface gráfica 

        $preco = '50.00';

        agora ela voltou a ser string.
        
        atenção ao convereter um valor quebrado para int por exemplo:
        
        $preco(int) = '22.42';

        fazendo isso somente o valor inteiro será considerado causando a perda dos centavos.
        
        Casting com booleam 
        
        $preco(booleam) = '20.22';

        O tipo booleam so recebe true ou false, nesse caso se a variável preço tiver algum valor dentro dela,
        o valor da varivel será true, 1 caso não o valor dela será false, no caso isso aocntece não so com numeros 
        no caso do boolem acontece com qualquer outro tipo de valor visto que ele so considera false ou true.
        
        

         


        








      
      */
    
    ?>


    
</body>
</html>