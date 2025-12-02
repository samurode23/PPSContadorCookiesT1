<?php
// Nombre de la cookie
$cookieContador = "visitas";

// Si la cookie existe, aumentamos contador
if(isset($_COOKIE['cookieContador'])) {
    $visitas = $_COOKIE["cookieContador"] + 1;
} else {
// Primera visita
    $visitas = 1;
}

// Creamos la cookie sin fecha de expiración para que se borre al cerrar el navegador
setcookie("cookieContador", $visitas);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas segun cookies</title>
</head>
<body>
    <h1>Has visitado la página <?php echo $visitas; ?> veces.</h1>
</body>
</html>