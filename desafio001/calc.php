<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $numero = $_POST['numero'];
      $sucessor = $numero + 1;
      $antecessor = $numero - 1;

      echo"<p> O sucesssor do numero é : ".$sucessor."O antecessor do numero é : ".$antecessor."</p>";

    ?>

    <a href="http://localhost/REVISAO_PHP/desafio001/">Voltar</a>
</body>
</html>