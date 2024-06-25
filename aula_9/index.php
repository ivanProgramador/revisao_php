<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php
      /*
       Constantes são varieis que não mudam de valor, normalmente esse tipo de varivel é usada para 
       guaradar dados de conexão,endereços de url para apis, strings contendo scripts sql, basicamente 
       informções que não podem ser alteradas durante o uso do sistema ou teste dele.
       
       como o PHP sabe a diferença entre uma varivel  e uma constante ?
       
       para declarara uma varivel comum é usada uma sintraxe simples 
         
          $variavel_comum
          
       para declarara uma constante é necessario usar uma função interna do PHP chamada 'define' que recebe 
       2 parametros:

       1 - nome da variavel que será a constante que deve ser em caixa alta
       2 - oque essa variavel vai guardar
       
       define('MINHA_CONSTANTE','meu_nome');

       nos exemplo abaixo eu informei que não quero que a url da conexão seja alterada de forma nenhuma 
       e que tambem o nome do usuário master sejá jose e que ela não seja alterada também.
       
       assim caso eu precise usar a url de conexão em qualquer ponto do meu código nada pode mudar ela ou sobrepor 
       o seu valor 

      */

      define('URL_CONEXAO','htts://teste.com.br/teste');
      define('USUARIO_MASTER','jose');
      



    ?>
</body>
</html>