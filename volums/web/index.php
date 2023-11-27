<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECTE VIDEOJOCS</title>
</head>
<body>
    <header>
        <h1 style="font-family: 'Courier New', monospace;">PROJECTE VIDEOJOCS</h1>
    </header>

    <nav>
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle">&#9776; Menú</label>
        <ul>
            <li><a href="funcion1.php">Mostra de Videojocs</a></li>
            <li><a href="#assignar">Assignar Codi</a></li>
            <li><a href="#eliminar">Eliminar Videojocs</a></li>
            <li><a href="#afegir">Afegir Data Expiració</a></li>
            <li><a href="#comprovar">Comprovar Repetits</a></li>
            <li><a href="#comprovarAmpliada">Comprovar Repetits Ampliada</a></li>
            <li><a href="#eliminarRepetits">Eliminar Repetits</a></li>
            <li><a href="#modernAntic">Videojoc més Modern i més Antic</a></li>
            <li><a href="#ordenar">Ordenació Alfabètica de Videojocs</a></li>
        </ul>
    </nav>

    <!-- ESTILO PARA LA PAGINA PRINCIPAL (HAY QUE IR PULIENDO, PONER IMAGES EN MOVIMIENTO TAL VEZ DE ALGUNOS JUEGOS DE LOS QUE APARECEN EN EL JSON) -->

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
        }

        li {
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        a:hover {
            color: #ffcc00;
        }

        input[type="checkbox"] {
            display: none;
        }

        label {
            cursor: pointer;
            font-size: 18px;
            display: none;
        }

        @media only screen and (max-width: 600px) {
            label {
                display: block;
            }

            ul {
                display: none;
                flex-direction: column;
            }

            input:checked + ul {
                display: flex;
            }

            li {
                margin-right: 0;
                margin-bottom: 10px;
            }
        }
    </style>
</body>
</html>
