<?php
include 'funcions.php';
mostrarMenu();
$juegos = cargarInfoJuegos();
$juegosOrdenados = ordenarJuegosAlfabeticamente($juegos);

$jsonResult = json_encode($juegosOrdenados, JSON_PRETTY_PRINT);
file_put_contents('JSON_Resultat_ordenat_alfabetic.json', $jsonResult);

echo '<style>';
echo 'table {';
echo '    border-collapse: collapse;';
echo '    width: 100%;';
echo '}';
echo 'table, th, td {';
echo '    border: 1px solid black;';
echo '}';
echo 'th, td {';
echo '    padding: 10px;';
echo '    text-align: left;';
echo '}';
echo 'th {';
echo '    background-color: #f2f2f2;';
echo '}';
echo '</style>';

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