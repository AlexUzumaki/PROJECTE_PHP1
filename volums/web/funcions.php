<?php

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
