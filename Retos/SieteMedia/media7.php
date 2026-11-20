<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultado de la partida — Siete y Media</title>
<link rel="stylesheet" href="styles/styles.css">
</head>

<body>

<?php
    include "media7fun.php";

    $apuesta = (float) limpiarCampos($_POST["apuesta"] ?? 0);

    $jugadores = [
        limpiarCampos($_POST["jugador1"] ?? '') => ['apuesta' => $apuesta],
        limpiarCampos($_POST["jugador2"] ?? '') => ['apuesta' => $apuesta],
        limpiarCampos($_POST["jugador3"] ?? '') => ['apuesta' => $apuesta],
        limpiarCampos($_POST["jugador4"] ?? '') => ['apuesta' => $apuesta],
    ];

    $numeroCartas = (int) limpiarCampos($_POST["cartas"]);

    $baraja = crearBaraja();
    $barajaRemovida = removerBaraja($baraja);

    sacarCartas($barajaRemovida, $numeroCartas, $jugadores);
    $resultado = jugar($jugadores);
?>

<main class="shell">
<header class="banner"><h1>🂡 Juego de las Siete y Media</h1><p>Reto 2.2 · Resultado de la partida</p></header>
<section class="panel">

    <h2>Cartas y puntuaciones</h2>
    <?php
        mostrarTablaResultados($jugadores);
    ?>
    <h2 style="margin-top:25px">Fichero generado</h2>

<p style="margin-top:22px"><a class="back" href="media7.html">← Volver al formulario</a></p>
</section>
</main>
</body>
</html>