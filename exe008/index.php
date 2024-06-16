<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões aritméticas</title>
</head>
<body>
    <?php

      /*Pra executar o calmculo de expressões aritmeticas o php seguye as normlas de precenedia matematica dos operadores
        por exemplo a expressão:

        5 + 2 / 2 = 3.5 -> se php ignorasse a precendencia o resultado seria esse errrado.  
        5 + 2 / 2 = 6   -> seguindo a precedencia o resultado correto é esse. 

        ignorando a precendencia 

        1 - soma 5 + 2  = 7 
        2 - divide 7 /2 = 3.5

        seguindo a ordem precendecia(norma matemática isso não eo php quem determina)
        
        1 - divide 2 / 2 = 1 
        2 - soma  1 + 5 = 6

        Ordem geral de precendencia 
        1 - ** potencia 
        2 - * / % (como esses tres estão em segundo lugar então a ordem fica da esquerda para direita -> )
        3 - + - (mesma regra se tiver mais de uma prioriza da esquerda para direita)
        
        Outra expressão de exemplo
        
        50 / 2 + 3 ** 2 = 34 

        1 - potencia 3 ** 2 = 9 
        2 - divisão  50 / 2 = 25
        3 - soma 25 + 9 = 34

        mas caso existam parentes na expressão a opração que estiver entre parentes tem a prioridade,
        na expressão abaixo por exemplo a divisão deve ser excutada primeiro isso vale para qualquer 
        expressão matemática 

        (50/2) + 3 ** 2 =  

      */

      
    
    ?>
    
</body>
</html>