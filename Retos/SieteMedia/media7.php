<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Resultado de la partida — Siete y Media</title>
<link rel="stylesheet" href="styles/styles.css">
</head>

<body>
<main class="shell">
<header class="banner"><h1>🂡 Juego de las Siete y Media</h1><p>Reto 2.2 · Resultado de la partida</p></header>
<section class="panel">
	
	<h2>Cartas y puntuaciones</h2>
	
    <h2 style="margin-top:25px">Fichero generado</h2>
   

<p style="margin-top:22px"><a class="back" href="media7.html">← Volver al formulario</a></p>
</section>
</main>

<?php 
    include "media7fun.php";

    $jugador1 = limpiarCampos($_POST["jugador1"]);
    $jugador2 = limpiarCampos($_POST["jugador2"]);
    $jugador3 = limpiarCampos($_POST["jugador3"]);
    $jugador4 = limpiarCampos($_POST["jugador4"]);
    $numeroCartas = limpiarCampos($_POST["cartas"]);
    $cantidadApuesta = limpiarCampos($_POST["apuesta"]);
    $baraja = crearBaraja();
    var_dump($baraja);

    $test1 = restarNumero(10);
    $test2 = restarNumero(11);
    $test3 = restarNumero(20);
    $test4 = restarNumero(40);

    echo "{$test1} , {$test2} , {$test3} , {$test4}";
?>
</body>
</html>
