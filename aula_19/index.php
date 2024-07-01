<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções matematicas nativas</title>
</head>
<body>

  <?php
    /*
      ceil($numero) -> serve para arredondar o valor para cima 
      floor($numero)  -> serve para arredondar o valor para baixo 
      round($numero) -> Arredonda o valor com base nas casas decimais
      rand() -> gera um numero inteiro aleatório
      sqrt($numero) -> retorna a raiz quadrada

    */

    $numero = 7.3; //nesse caso 8 eo proximao inteiro
    echo 'Função ceil() aplicada a 7.3 =  '.ceil($numero).'<br><hr>'; 
    $numero = 7.3; //nesse caso o numero 7 eo porximo inteiro inferior
    echo 'Função floor() aplicada a 7.3 =  '.floor($numero).'<br><hr>';
    
    //nesse caso ele arredonda com base na fração como o numero quebrado e menor que 5
    //ele vai arredondar para 7 agora se o numero quabrado fosse 5 ou 6 o resultado seria 8
    $numero = 7.3; 
    echo 'Função round() aplicada a 7.3 =  '.round($numero).'<br><hr>'; 

    //gerando um numero aleatório o rand() recebe 2 parametros o primeiro eo valor minimo do inteiro aleatório que ele vai gerar
    // o segundo ao maximo então aqui ele vai gerar um interio aleatorio entre 10 e 20   
    echo 'Gerando um inteiro aleatório '.rand(10,20).'  O maior valor inteiro aleatório possivel desse sistema operacioonal é = '.getrandmax().'<br><hr>'; 
    
    $numero = 9; 
    echo 'Função sqrt() aplicada a 9 =  '.sqrt($numero).'<br><hr>'; 







  
  
  ?>
    
</body>
</html>