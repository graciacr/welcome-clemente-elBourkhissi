<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Garcia-Lopez</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Projecte Welcome 1</h1>
    </header>
    <main>
        <section>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Perfil HTML</th>
                    <th>Imagen</th>
                </tr>
                <tr>
                    <?php
                    $profileDir = 'profiles/';
                    $imageDir = 'images/';
                    $profiles = glob($profileDir . '*.html');
                    $columnCount = 0;

                    foreach ($profiles as $profile) {
                        $fileName = basename($profile, '.html'); // Obtiene el nombre del archivo sin extensión
                        $imagePath = $imageDir . $fileName . '.jpg'; // Ruta de la imagen correspondiente
                        
                        // Abrimos una nueva fila cada 5 columnas
                        if ($columnCount % 5 == 0 && $columnCount != 0) {
                            echo "</tr><tr>";
                        }

                        echo "<td>";
                        echo "<strong>$fileName</strong><br>"; // Nombre del alumno
                        echo "<a href='$profile'>Ver Perfil</a><br>"; // Enlace al perfil HTML
                        
                        // Mostramos la imagen si existe
                        if (file_exists($imagePath)) {
                            echo "<img src='$imagePath' alt='Imagen de $fileName'><br>";
                        } else {
                            echo "No hay imagen<br>";
                        }

                        echo "Descripción de $fileName<br>"; // Puedes personalizar este texto
                        echo "Contacto de $fileName"; // Puedes personalizar este texto
                        echo "</td>";
                        
                        $columnCount++;
                    }

                    // Añadimos celdas vacías si el último row tiene menos de 5 elementos
                    while ($columnCount % 5 != 0) {
                        echo "<td></td>";
                        $columnCount++;
                    }
                    ?>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Proyecto Welcome clemente-elBourkhissi</p>
    </footer>
</body>
</html>
