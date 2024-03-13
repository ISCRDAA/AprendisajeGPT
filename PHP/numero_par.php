<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de programaicon en php</title>
</head>
<body>
    <a href="bucle.php">Ejercicio de bucle</a>
    <h2>Verificacion de numeor impar o par</h2>
    <form  method="post">
        <label>Ingrese un numero:</label>
         <input type="number" id="numero" name="numero"> <br>
         <input type="submit" value="Enviar">
    </form>
    <?php  
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $numero = $_POST['numero'];
        if($numero%2==0){
            echo"<p>$numero El numero es par</p>";
        }else{
            echo"<p> $numero El numero es impar</p>";
        }

    }

    ?>
    

</body>
</html>