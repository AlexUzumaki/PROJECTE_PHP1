<?php
include 'funcions.php';
mostrarMenu();
$juegos = cargarInfoJuegos();
$juegosOrdenados = ordenarJuegosAlfabeticamente($juegos);

$jsonResult = json_encode($juegosOrdenados, JSON_PRETTY_PRINT);
file_put_contents('JSON_Resultat_ordenat_alfabetic.json', $jsonResult);

// Mostrar la tabla
echo '<h1>VIDEOJUEGOS ORDENADOS ALFABÉTICAMENTE</h1>';
echo '<table>';
echo '<tr>';
echo '<th>Nombre</th>';
echo '<th>Desarrollador</th>';
echo '<th>Plataforma</th>';
echo '<th>Lanzamiento</th>';
echo '<th>ID</th>';
echo '</tr>';

foreach ($juegosOrdenados as $juego) {
    echo '<tr>';
    echo '<td>' . $juego['Nom'] . '</td>';
    echo '<td>' . $juego['Desenvolupador'] . '</td>';
    echo '<td>' . $juego['Plataforma'] . '</td>';
    echo '<td>' . $juego['Llançament'] . '</td>';
    echo '<td>' . $juego['ID'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>