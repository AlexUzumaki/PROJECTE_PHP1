<?php
include 'funcions.php';

$juegos = cargarinfo();
$juegosConFechaExpiracion = agregarFechaExpiracion($juegos);

$jsonResult = json_encode($juegosConFechaExpiracion, JSON_PRETTY_PRINT);

file_put_contents('JSON_Resultat_Data_Expiració.json', $jsonResult);

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

// Mostrar el resultado en forma de tabla
echo '<h1>ID DELS VIDEOJOCS</h1>';
echo '<table>';
echo '<tr>';
echo '<th>Nombre</th>';
echo '<th>Desarrollador</th>';
echo '<th>Lanzamiento</th>';
echo '<th>ID</th>';
echo '<th>FechaExpiracion</th>';
echo '</tr>';

foreach ($juegosConFechaExpiracion as $juego) {
    echo '<tr>';
    echo '<td>' . $juego['Nom'] . '</td>';
    echo '<td>' . $juego['Desenvolupador'] . '</td>';
    echo '<td>' . $juego['Llançament'] . '</td>';
    echo '<td>' . $juego['ID'] . '</td>';
    echo '<td>' . $juego['FechaExpiracion'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>