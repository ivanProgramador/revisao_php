<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-comerce</title>
</head>
<body>

  <?php
    // mecanica de clacula de compra usando condicionais 

    $usuario_possui_cartao_loja = true;
    $valor_compra = 225;
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
  <?php 
    if($usuario_possui_cartao_loja == true){
        echo"sim";
    }else{
        echo"não";
    }
  
  ?>

  <p>valor da compra <?= $valor_compra ?></p>

  <p>Recebeu desconto no frete ? </p>
  <?php 
    if($recebeu_desconto_frete == true){
        echo"sim";
    }else{
        echo"não";
    }
  
  ?>

<p>valor do frete <?= $valor_frete ?></p>


  
    
</body>
</html>