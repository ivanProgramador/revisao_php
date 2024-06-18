<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Coversor</title>
</head>
<body>

<main>
    <h1>Conversor</h1>
    <form action="calc.php" method="post">
        <label for="din">Quantos R$ você tem na carteira ? </label>
<!--a confiração step serve para que o campoo number aceite valores decimais  -->
        <input type="number" name="din" id="din" step="0.01">
        <input type="submit" value="Converter">
    </form>
</main>
    
</body>
</html>