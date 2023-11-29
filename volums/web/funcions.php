<?php
// funcion 1
function carregarInformacio() {
    $fitxer = 'games.json';
    $contingut = file_get_contents($fitxer);
    $informacio = json_decode($contingut, true);

    return $informacio;
}

function mostrarVideojocs($videojocs) {
    echo '
    <!DOCTYPE html>
    <html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Mostra de Videojocs</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        <h1>Mostra de Videojocs</h1>';

    if (!empty($videojocs)) {
        echo '<table>
                <tr>
                    <th>Nom</th>
                    <th>Desenvolupador</th>
                    <th>Any de Llançament</th>
                </tr>';

        foreach ($videojocs as $videojoc) {
            echo '<tr>
                    <td>' . $videojoc['Nom'] . '</td>
                    <td>' . $videojoc['Desenvolupador'] . '</td>
                    <td>' . $videojoc['Llançament'] . '</td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo '<p>No hay información de videojuegos disponible.</p>';
    }

    echo '</body>
    </html>';
}
?>
<!-- Segunda función, asignar un número a cada juego -->

<?php

function asignarNumeroAVideojuegos($videojocs) {
    // Cargar el contenido del archivo JSON
    $fitxer = 'games.json';
    $contingut = file_get_contents($fitxer);
    $videojocsExistents = json_decode($contingut, true);

    // Verificar si ya hay videojuegos con ID asignado
    $maxID = 0;
    foreach ($videojocsExistents as $videojoc) {
        if (isset($videojoc['ID'])) {
            $maxID = max($maxID, $videojoc['ID']);
        }
    }

    // Asignar ID a los videojuegos que no lo tienen
    foreach ($videojocs as &$videojoc) {
        if (!isset($videojoc['ID'])) {
            $maxID++;
            $videojoc['ID'] = $maxID;
        }
    }

    // Sobrescribir el archivo original con la información actualizada
    file_put_contents($fitxer, json_encode($videojocs, JSON_PRETTY_PRINT));

    return $videojocs;
}
?>

<!-- TERCERA FUNCIÓN, ELIMINAR VIDEOJUEGO -->
<?php
function eliminarJuegosPorFecha($archivoOriginal, $archivoResultado) {
    // Leer el contenido del archivo original
    $contenidoOriginal = file_get_contents($archivoOriginal);

    // Decodificar el JSON a un array asociativo
    $videojocs = json_decode($contenidoOriginal, true);

    // Filtrar los juegos por la fecha
    $videojocsFiltrados = array_filter($videojocs, function($juego) {
        $fechaLanzamiento = $juego['Llançament'];

        // Verificar si la fecha está fuera del rango deseado (2020-01-01 a 2020-12-31)
        return !(strtotime($fechaLanzamiento) >= strtotime('2020-01-01') && strtotime($fechaLanzamiento) <= strtotime('2020-12-31'));
    });

    // Crear un nuevo archivo JSON con la información actualizada
    file_put_contents($archivoResultado, json_encode($videojocsFiltrados, JSON_PRETTY_PRINT));

    return $videojocsFiltrados;
}

function carregarInformaciono2020() {
    $fitxer2 = 'JSON_Resultat_Eliminar.json';
    $contingut2 = file_get_contents($fitxer2);
    $informacio2 = json_decode($contingut2, true);

    return $informacio2;
}
?>
<!-- CUARTA FUNCIÓN -->
<?php

function cargarinfo() {
    $fitxer = 'games.json';
    $contingut = file_get_contents($fitxer);
    $informacio = json_decode($contingut, true);

    return $informacio;
}

function agregarFechaExpiracion($juegos) {
    foreach ($juegos as &$juego) {
        $fechaLanzamiento = new DateTime($juego['Llançament']);
        $fechaExpiracion = $fechaLanzamiento->modify('+5 years')->format('Y-m-d');
        $juego['FechaExpiracion'] = $fechaExpiracion;
    }

    return $juegos;
}

?>
<!-- QUINTA FUNCIÓN -->
<?php
function jocsRepetits($jsonString) {
    $videojocs = json_decode($jsonString, true);
    $ids = array();

    foreach ($videojocs as $videojoc) {
        if (isset($videojoc['ID'])) {
            $ids[] = $videojoc['ID'];
        }
    }

    return count($ids) !== count(array_unique($ids)) ? 1 : 0;
}
?>


