<?php
// funcion5.php
include 'funcions.php';
mostrarMenu();
?>

<?php
// Cargar información desde el archivo JSON
$informacio = carregarInformacio();

// Llamar a la función para verificar registros duplicados
if (jocsRepetits(json_encode($informacio))) {
    echo '<p>HI HA REGISTRES DUPLICATS.</p>';
} else {
    echo '<p>NO HI HA REGISTRES DUPLICATS.</p>';
}
?>
