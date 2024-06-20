<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form retro</title>
</head>
<body>

<!--
 Formularios retroaliamentados são uteis para validar informações nates de envia-las diretamente 
 ao servidor ou executar processamentos necessarios antes do envio  
-->

<?php
  //capturando dados do formulario retroalimentado 
  $valor1 = $_GET['v1'] ?? 0;
  $valor2 = $_GET['v2'] ?? 0;
?>

<main>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">

       <label for="v1">Valor 1 </label>
       <input type="number" name="v1" id="v1" value="<?= $valor1 ?>">
       <label for="v1">Valor 2 </label>
       <input type="number" name="v2" id="v2" value="<?= $valor2 ?>">
       <input type="submit" value="somar">

    </form>
</main>

<section id="resultado">
  <?php
    $soma = $valor1 + $valor2;
    
    print"<p> A soma entree os valores $valor1 e $valor2 é igual a $soma.</p>";
   ?>

</section>


    
</body>
</html>