<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicacion</title>
</head>
<body>
    <div>
    <form action="" method="post">
            <input type="number" name="numero1" id="" placeholder="numero">
            <input type="numer" name="numero2" id="" placeholder="numero">
            <button type="submit">sumar</button>
        </form>
    </div>
</body>
</html>
<?php
$numero1= $_POST['numero1'];
$numero2= $_POST['numero2'];
$resultado = ($numero1*$numero2);

echo "<br><hr><table>
<tr>
<td>numero1</td>
<td>numero2</td>
<td>resultado</td>
</tr>
<tr>
<td>".$numero1."</td>
<td>".$numero2."</td>
<td>".$resultado."</td>
</tr>
</table>";