<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular el area de un cuadrado</title>
</head>
<body>
    <label for="calcular">Ingrese el numero de un cuadrado:</label>
    <form method="post">
        <input type="number" name="numero">
        <input type="submit" value="Enviar">
    </form>
    <?php
        function calcularArea($numero){
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $numero = $_POST["numero"];
                $cuadrado= $numero*$numero;
                return $cuadrado;
            }
            return null;
            
        }
        $resultado = calcularArea($_POST["numero"]);
        if($resultado !== null){
            echo "Tu area es:".$resultado;
        }
       
        
        
        
    ?>    
    
</body>
</html>