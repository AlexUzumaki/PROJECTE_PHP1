<?php
include 'funcions.php';

// Cargar la información de los videojuegos
$videojocs = carregarInformacio();

// Asignar un número a cada juego
$videojocsConNumeros = asignarNumeroAVideojuegos($videojocs);

// Mostrar el resultado de manera más amigable
echo '<h1>Videojocs con Números Asignados</h1>';
echo '<ul>';
foreach ($videojocsConNumeros as $videojoc) {
    echo '<li>Nombre: ' . $videojoc['Nom'] . ', Desarrollador: ' . $videojoc['Desenvolupador'] . ', Lanzamiento: ' . $videojoc['Llançament'] . ', Número: ' . $videojoc['Numero'] . '</li>';
}
echo '</ul>';
?>
