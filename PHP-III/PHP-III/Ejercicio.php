<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO PHP</title>
</head>
<body>
    <div>
        <h1>Menu de opciones en PHP</h1>
        <ul>
            <li>1.Usuario</li>
            <li>2.Suma</li>
            <li>3.Resta</li>
            <li>4.Multiplicacion</li>
            <li>5.Division</li>
        </ul>
    </div>

    <form action="" method="post">
        <input type="number" name="opt" id="opt">
        <button type="Submit">Ingresar</button>
    </form>
</body>
</html>
<?php
$opt=$_POST['opt'];

switch ($opt) {
    case '1':
        header('location: formulario.php');
    break;
    case '2':
        header('location: suma.php');
    break;
    case '3':
        header('location: resta.php');
    break;
    case '4':
        header('location: multiplicacion.php');
    break;
    case '5':
        header('location: division.php');
    break;
    default:
        echo "digite una opcion valida";
    break;
}