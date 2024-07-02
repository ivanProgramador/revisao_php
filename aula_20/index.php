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

   /*
    existem meios de calcular a distancia entre dias em relação a data inicial e data final em php 
    como se trata de um processo muito longo eu vou fazer um função para executar iossso de forma mais rapida 
   */

   // para calcular datas elas sempre devem estar no formato americano ano/mes/dia

   $data_inicial = '2024-07-01';
   $data_final = '2024-07-10';
   
   //timestamp
   //data do começo da era unix 01/01/1970
   /*
     primeiro a data inicial deve ser convertida em segundos 
     usando a função strtotime() ela vai calcular quantos segundos se passaram do dia 
     01/01/1970 até a data inicial 2024-07-01 
     
     agora o time_inicial possui o valor da data inicial em segundos que seria a diferença entre 
     01/01/1970 até a data inicial 2024-07-01 em segundos qoue torna ela um numero que pode ser calculado
     agora a proxima etapa e fazer isso com a data final.

      $time_inicial = strtotime($data_inicial);
      $time_final = strtotime($data_final);

    agora que eu tenho a a representação da data inicial e da data final em segundos 
    agora eu tenho que calçcular a diferença de valor entrea as duas para calcular eu tenho que 
    subtrair o valor da data inicial data data final porque a diferença entre elas e oque eu quero 
    saber e tem que ser nessa ordem porque se não vai ter um valor negativo.
    
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        $diferenca_time = $time_final - $time_inicial;
    
    Agora eu tenho que dividir o valor da diferença pela quantidade de segundos existentes em um dia

        $segundos_exitentes_em_um_dia = 24 * 60 * 60;
      
    Agora e so fazer a divisão para saber quantos dias cabem dentro dos sefgundos de diferença 

        $diferenca_de_dias_entre_as_datas = $diferenca_time / $segundos_exitentes_em_um_dia;

    mostrando na tela a quantidade de dias 

       echo'A diferença de dias entrea a data inicial e a data final é : '. $diferenca_de_dias_entre_as_datas;

    

   */

     $time_inicial = strtotime($data_inicial);
     $time_final = strtotime($data_final);

     $diferenca_time = $time_final - $time_inicial;

     $segundos_exitentes_em_um_dia = 24 * 60 * 60;

     $diferenca_de_dias_entre_as_datas = $diferenca_time / $segundos_exitentes_em_um_dia;
     
     echo'A diferença de dias entrea a data inicial e a data final é : '. $diferenca_de_dias_entre_as_datas;

    




 




  
 




?>
    
</body>
</html>