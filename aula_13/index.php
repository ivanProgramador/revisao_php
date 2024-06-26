<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores tenários</title>
</head>
<body>
  
<?php

        /* usar operadores ternários para estrtuiras de decvisão diminui a quantidade de linhas porém
            os operadores ternários estão limitados a apenas um retorno, no exemplo abaixo eu vou refatorar 
            o codigo do execicio de e-comerce usando operadores ternários so inves de if else.

            Nomelemente esses operadores são usado quando o retorno é algo simples como nesse caso testar se uma variavel,
            e verdeira oufalasa e com basse nisso retornar um texto. 
 

            <variavel>  ? <se for verdadeiro > : <se for falso> ; 
            
            <?= $usuario_possui_cartao_loja ? 'SIM':'NÃO'; ?>

            atribuindo o resultado de um operador ternário a um variável: 

            $teste = $usuario_possui_cartao_loja ? 'SIM':'NÃO'; 




        */

        
        // mecanica de clacula de compra usando condicionais 

        $usuario_possui_cartao_loja = true;
        $valor_compra = 99;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;

        /*
            Regra de negocio  1 
            para que o frete seja gratis 

            1 - cliente tem que ter um cartão da loja 
            2 - cliente tem que fazer uma compra de valor igual ou maior que 100 reais   
        */

        if($usuario_possui_cartao_loja = true && $valor_compra >= 100){

            $valor_frete = 0;
            $recebeu_desconto_frete=true;

        }

        
?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja ?</p>

    <?= $usuario_possui_cartao_loja ? 'SIM':'NÃO'; ?>

    <p>valor da compra <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete ? </p>

    <?= $recebeu_desconto_frete ? 'SIM':'NÃO'; ?>

    <p>valor do frete <?= $valor_frete ?></p>

</body>
</html>