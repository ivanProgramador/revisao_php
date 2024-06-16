<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
      /*
        Existem dois arrays superglobais chamados  $_GET[] e $_POST[] ,
        cada um tem o nome de um tipo de requisição http para receber os 
        dados digamos se seu fomrulario usar o metodo get os dados vão para 
        o seuper array GET se seu formulario usar o post osdados vão para o 
        super array post.
        
        como esses array ficam inplicitos não e preciso declarar eles, cada indice 
        gerado dentro deses array e baseados no nome ddos campos do formulario
        por exemplo. meu formulario tem os campos nome e sobrenome 
        
        então quando ele chamar o aruivo cad.php ele vai gerar duas posições  nome e sobrenome
        dentro do array get porque o meu method lá no formulario e get, então  paera acesssar esses dados 
        eu tenho que consultar o indice $_GET['NOME'] na posição nome para poder pegar o valor que veio 
        a mesma coisa é com o post. 

        o operador ?? é um operador coalecencia nula ele testa se existe algum valor na variavel 
        se não tiver ele faz alguma coisa , nomeu caso eu so digo que os ususario esta sem nome
        e na varicvel sobrenome eu chamo ele de desconhecido   

      */
      $nome = $_GET['nome'] ?? "sem nome";  
      $sobrenome = $_GET['sobrenome'] ?? "desconhecido";  
      
      echo"<p> seu nome é : ".$nome." e seu sobrenome é : ".$sobrenome."</p>";
    ?>
    
</body>
</html>