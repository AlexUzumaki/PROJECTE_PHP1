<?php
include 'funcions.php';
mostrarMenu();
?>
<!DOCTYPE html>
    <html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Mostra de Videojocs</title>        
    </head>
    <body>
        <h1>Mostra de Videojocs</h1>
<?php
$informacio = carregarInformacio();
mostrarVideojocs($informacio);
?>

