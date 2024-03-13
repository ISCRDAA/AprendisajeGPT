<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de bucle de 1 al 100</title>

</head>
<body>
    <a href="index.php">Regresar</a>
    <h1>Bucle de 1 al 100</h1>

    <?php
        $numero = 1;
        while($numero <= 100){
            echo"$numero <br>";
            $numero++;
        }
        
    ?>
    
</body>
</html>