<?php

function FUNCION1($videojuegos){

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>Nom</th>";
    echo "<th>Desenvolupador</th>";
    echo "<th>Plataforma</th>";
    echo "<th>Llançament</th>";
    echo "</tr>";

    foreach($videojuegos as $videojuego){
        echo "<tr>";
        echo "<td>{$videojuego['Nom']}</td>";
        echo "<td>{$videojuego['Desenvolupador']}</td>";
        echo "<td>{$videojuego['Plataforma']}</td>";
        echo "<td>{$videojuego['Llançament']}</td>";
        echo "</tr>";
    }

    echo '</table>';
}

$juegosjson = file_get_contents('games.json');
$videojuegos = json_decode($juegosjson, true);

FUNCION1($videojuegos);

?>