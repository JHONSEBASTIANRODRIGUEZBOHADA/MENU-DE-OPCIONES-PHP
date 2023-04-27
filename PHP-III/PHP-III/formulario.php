<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATOS PERSONALES</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <input type="text" name="nombre" id="" placeholder="Nombre Usuario">
            <input type="text" name="telefono" id="" placeholder="telefono Usuario">
            <input type="text" name="email" id="" placeholder="email Usuario">
            <input type="text" name="direccion" id="" placeholder="direccion Usuario">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
<?php
$nombre= $_POST['nombre'];
$telefono= $_POST['telefono'];
$email= $_POST['email'];
$direccion= $_POST['direccion'];

echo "<br><hr><table>
<tr>
<td>Nombre</td>
<td>telefono</td>
<td>email</td>
<td>direccion</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$email."</td>
<td>".$direccion."</td>
</tr>
</table>";