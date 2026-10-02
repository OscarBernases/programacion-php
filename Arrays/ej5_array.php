<HTML>
<HEAD><TITLE> EJ4 Arrays</TITLE></HEAD>
<BODY>
<?php

    $primero = array ( "Programación", "Bases de Datos", "Lenguajes de Marcas", "Sistemas Informáticos");
    $segundo = [ "DWES", "DWEC", "Despliegue", "Diseño de Interfaces Web"];
    $optativas = ["Inglés Profesional","Digitalización"];

    $asignaturas = array();
    $asignaturasFuncion = array();
    $asignaturaBuscada = "DWES";
    $existe = false;
    $asignaturaEliminar = "Digitalización";

    // METER EN ARRAY LAS ASIGNATURAS DE CADA ARRAY
    foreach($primero as $i){
        $asignaturas[] = $i;
    }

    foreach($segundo as $i){
        $asignaturas[] = $i;
    }

    foreach($optativas as $i){
        $asignaturas[] = $i;
    }

    // ASIGNATURAS CON FOREACH
    echo "<h3>ARRAY REALIZADO CON FOREACH</h3>";
    var_dump($asignaturas);

    // ASIGNATURAS CON FUNCION MERGE
    $asignaturasFuncion = array_merge($primero, $segundo, $optativas);
    echo "<h3>ARRAY REALIZADO CON MERGE</h3>";
    var_dump($asignaturasFuncion);

    // AÑADIR PROYECTO INTERMODULAR
    $asignaturas[] = "Proyecto Intermodular";
    echo "<h3>ARRAY CON ASIGNATURA AÑADIDA (PROYECTO INTERMODULAR)</h3>";
    var_dump($asignaturas);

    // COMPROBAR SI EXISTE ASIGNATURA + POSICION
    if(in_array($asignaturaBuscada,$asignaturas)){
        $existe = true;
    } else {
        $existe = false;
    }

    $posicionBuscada = array_search($asignaturaBuscada, $asignaturas);

    // ELIMINAR UNA ASIGNATURA
    $posicionEliminar = array_search($asignaturaEliminar, $asignaturas);
    unset($asignaturas[$posicionEliminar]);
    echo "<h3>ARRAY CON ASINGATURA ELIMINADA (DIGITALIZACION)</h3>";
    var_dump($asignaturas);

    // ORDENAR ASIGNATURAS
    sort($asignaturas);
    echo "<h3>ARRAY ORDENADO CON SORT</h3>";
    var_dump($asignaturas);

    // MOSTRAR
    echo "<h3>MUESTRA FINAL</h3>";
    echo "<ul>";
    foreach ($asignaturas as $asignatura) {
        echo "<li>{$asignatura}</li>";
    }
    echo "</ul>";
    if ($existe == true) {
        echo "La asignatura {$asignaturaBuscada} existe y se encuentra en la posicion {$posicionBuscada} antes de ser ordenado.";
    } else {
        echo "La asignatura {$asignaturaBuscada} no existe.";
    }
?>
</BODY>
</HTML>