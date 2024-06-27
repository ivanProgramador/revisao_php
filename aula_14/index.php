<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 
    
     /*

      Como o nome sugere a estrutura de controle swicth funciona como um interruptor 
      cada um dos interruptores faz alguma coisa e para ou seja quando um é acionado os outros são 
      ignorados, como na vida real cada interruptor tem uma função, já no caso do switch cada interruptor 
      dele tem um case.
            
      toda a estrutura de controle precisa de uma variável para usar como ponto de partida  para o inicio 
      nesse caso eu usei a variável $interruptor  que recebe o valor 1 então apartir dai ela começa a ser testada pelo 
      case.

      se o valor dela for 1 ela liga a lampada 1 e para no break  para cada caso eu mostro um texto mas eu posso acolocar qualquer lógica 
      mais complexa para executar entre o case eo break.
      
      más caso eu não coloque valor nenhum nela ela recebe o default que é um caso que serve para executado caso a variável não tenha 
      nenhum valor, então assume o comportamento padrão default   
     */

     $interruptor = 1;

     switch ($interruptor) {
        case '1':
            echo'liga lampada 1';
        break;
        case '2':
            echo'liga lampada 2';
        break;
        case '3':
            echo'liga lampada 3';
        break;
        
        default:
            echo'mantém tudo apagado como estáva ';
        break;
     }
    
    
    ?>
</body>
</html>