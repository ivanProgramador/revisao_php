<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>

<?php

  /*
   A função date() recebe alguns parametros para configurar quais dados serão exibidos
   no caso cada paremetro é um dado especifico por exemplo eu vou mostrar data e hora 
   no formato tradicional dia/mes/ano 
   
   d -> dia(numero do dia ) se eu queiser o nome do dia o 'd' precisa ser maiusculo  
   m -> mês(numero do mês) 
   Y -> ano(ano com 4 digitos) se euq euiser qua mostre os dois digitos o 'Y' precisa ser minusculo
   H -> HORA
   i -> minutos

   eu posso colocar esses dados na ordem que precisar mostrar usando apenas a função date 

    echo date("d/m/Y h:i "); 

   Timezones
   
   O meu servidor estava no horário de Berlin como estou no Brasil ele vai mostrar a hora errada caso o susrio precise
   ver ou fazer registros na hora e data errada, existem duas formas de conecertar isso 
   
   1 - acessando php.ini e alteerar esse parametro assim : date.timezone=America/Sao_Paulo

   2 - mas casso não tem acesso ao servidor basta configurar usandoa a função date_default_timezone_set(); 
       essa função recebe como parametro 'America/Sao_Paulo' e executa  alateração de timezone em todas as datas solicitadas depois dela 
    
       data que estava como Berlin

        echo date("d/m/Y h:i ");
        
       modificando a timezone 
        
        date_default_timezone_set('America/Sao_Paulo');

      data corrigida 

        echo date("d/m/Y h:i ");
  */


  
 




?>
    
</body>
</html>