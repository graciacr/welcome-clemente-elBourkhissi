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
                <?php
                $profileDir = 'profiles/';
                $imageDir = 'images/';
                
                // Obtenemos todos los archivos HTML de la carpeta de perfiles
                $profiles = glob($profileDir . '*.html');

                foreach ($profiles as $profile) {
                    $fileName = basename($profile, '.html'); // Nombre del archivo sin extensión
                    $imagePath = $imageDir . $fileName . '.jpg'; // Ruta de la imagen correspondiente

                    // Verificamos si existe una imagen con el mismo nombre que el perfil
                    if (file_exists($imagePath)) {
                        echo "<tr>";
                        echo "<td><strong>$fileName</strong></td>"; // Nombre del alumno
                        echo "<td><a href='$profile'>Ver Perfil</a></td>"; // Enlace al perfil HTML
                        echo "<td><img src='$imagePath' alt='Imagen de $fileName'></td>"; // Imagen
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Proyecto Welcome clemente-elBourkhissi</p>
    </footer>
</body>
</html>
