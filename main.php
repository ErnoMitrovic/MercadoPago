<?php

require __DIR__ .  '/vendor/autoload.php';
MercadoPago\SDK::setAccessToken("TEST-5858676746087604-080521-cad403637c2434eba4561e6d31ed45c0-1168111390");

// Para el valor del donativo
session_start();

$_SESSION["name"] = $_POST["name"];
$_SESSION["donation"] = $_POST["donation"];

$donativo = $_SESSION["donation"];
// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Donacion';
$item->quantity = 1;
$item->unit_price = $donativo;
$preference->items = array($item);
$preference->save();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donacion Pago</title>
    <link rel="stylesheet" href="./styles/main.css">
    <script src="https://sdk.mercadopago.com/js/v2"></script>
</head>

<body>
    <h1>Gracias <?= "${_SESSION['name']}" ?></h1> <br>
    <h2>Con tu ayuda podemos ayudar a más personas</h2> <br>
    <p>Transacción 100% segura <br>
        Si eres una empresa y deseas donar o requieres recibo deducible de tu donativo escríbenos a
        <a href="mailto:procuracion.fondos@depmh.org">procuracion.fondos@depmh.org</a>
    </p>
    <div class="row">
        <div class="column">
            <img src="./img/Dona.JPG" alt="Dona" width="200">
        </div>
        <div class="column">
            <img src="./img/Descubre.JPG" alt="Descubre" width="200">
        </div>
    </div>

    <div class="check-btn"></div>

    <script>
        const mp = new MercadoPago('TEST-6c5bb036-ffad-436f-861d-0b1a74508ef1', {
            locale: 'es-AR'
        });

        mp.checkout({
            preference: {
                id: '<?= $preference->id ?>'
            },
            render: {
                container: '.check-btn',
                label: 'Donar',
            }
        });
    </script>
</body>

</html>