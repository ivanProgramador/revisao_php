<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php

      $numero_inicial = $_POST['numero_inicial'];
      $numero_final   = $_POST['numero_final'];

      $numero_gerado = rand($numero_inicial, $numero_final);

      echo"<p> O numero gerado é : ".$numero_gerado."</p>";

      
    ?>
    <a href="http://localhost/REVISAO_PHP/desafio002/">Voltar</a>
</body>
</html>