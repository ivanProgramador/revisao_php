<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando Scripts php delimitadores</title>
</head>
<body>


<h2>Exemplo de php </h2>
<?php
  //se eu colocar D maiusculo ele vai meostrar o dia da semana se eu colocar minusculo ele mostra o numero do dia do mês 
  echo' Hoje é dia : '.date("d/m/y"); 
  
  // no caso ele vai mostrara a hora errada porque por padrão ele não vem com a timezone do brasil configurada 
  //embora seu computador esteja na hora correta o seu computador eo cliente, então esssa hora que esta sendo exbida tem 
  //que ser configuradda no servidor do php 

  date_default_timezone_set('America/Sao_Paulo'); //configurando a time zone 

  echo' e a hora atual é : '.date("G:i:s T"); 
?>

<!--
 Existem muitas maneiras de delimitar área de execução de um script php,
 a áre de execvução que estou me referindo é onde o interpretador começa
 a ler e excutar o codigo ate a area que ele deve parar de fazer isso.
 
 Até aqui eu usei supertag <?php  /* tudo oque estiuver aqui dentro e codigo que o php vai considerar  */ ?>
 ------------------------------------------------------------------------
 Delimitadores
  -> supertag
 <?    ?> -> short open tag(para ela funionar temos que fazer a configuração no php.ini)
 <%    %> -> ASP tag (antigamente funcionava se fosse configurada na versão 5.6 más as versões atuais não usam mais)
 /*<?= $echo("teste"); ?> */-> Essa serve para exibições simples de valore de variaveis 

 ATENÇÃO
 Pode acontecer no sistema MAC da versão php distribuida seja a versão de
 produção e não a versão de desenvolvimento então algumas coinfigurações podem ser necesssárias
 isso eu falo da versão 8.2  

-->







    
</body>
</html>