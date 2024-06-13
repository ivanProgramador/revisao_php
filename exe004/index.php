<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php
      //uma variavel comum muda de valor conforme a necessidade
      //a varivel php fica armazenada no servidor oque aparece para o cliente é somente o resultado
      $nome = 'José';

      //as constantes como o nome ja diz o valor delça não pode ser alterado caso exista algum valor
      //que precise ser protegido durante a aexecução do copdigo ele precisa ser posto em uma constante
      //por exemplo o valor de um porduto que valor 1000 se ele estiver em uma constante ele muda durante 
      //a execução de oprações relacionadas a ele   
      
      const Valor = 1000;

      /*
      regras gerais de identificadores 
      
        1 - variaveis sempre começam com o simbolo $
        2 - segunda letra pode ser letra ou simbolo $_teste ou $teste 
        3 - Aceita caracteres [a-z],[A-Z],[0-9], E[ _ ]
        4 - Aceita caratres da tabela ASCIII apartir do côdigo 128(pode usar acentos nas veriaveis mais isso não é aconselhavel)
        5 - O php é case sensitive 
        6 - Nomes especiais(reservados) $this não pode ser usados para nomear uma variavel   
      */

      
  

    
    ?>
</body>
</html>