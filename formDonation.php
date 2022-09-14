<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
</head>
<body>
    <form action="./main.php" method="POST">
        <label for="nombre">Ingresa tu nombre: </label>
        <input name="nombre" id="nombre" type="text" pattern="([A-Z])\w+" required>
        <br>
        <label for ="correo">Ingresa tu correo: </label>
        <input name="correo" id="correo" type="email" required>
        <br>
        <label for="cell">Ingresa tu numero: </label>
        <input name="cell" id="cell" type="text">
        <br>
        <label for="donacion">Ingresa el valor a pagar: </label>
        <input name="donacion" id="donacion" type="text" pattern="([1-9])\d*\.?" required>
        <br>
        <label for="coments">Comentarios: </label>
        <textarea name="coments" id="coments" cols="40" rows="5"></textarea>
        <br>
        <input type="submit" value="Confirmar" required>
    </form>
</body>
</html>