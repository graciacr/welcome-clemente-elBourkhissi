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
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Perfil HTML</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Contacto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $profileDir = 'profiles/';
                    $imageDir = 'images/';
                    $profiles = glob($profileDir . '*.html'); // Busca todos los archivos HTML en "profiles/"
                    
                    foreach ($profiles as $profile) {
                        $fileName = basename($profile, '.html'); // Obtiene el nombre base sin la extensión
                        $imagePath = $imageDir . $fileName . '.jpg'; // Ruta de la imagen correspondiente
                    
                        echo "<td><a href='$profile'>$fileName</a><br>";
                        if (file_exists($imagePath)) {
                            echo "<img src='$imagePath' alt='Imagen de $fileName'>";
                        } else {
                            echo "No hay imagen";
                        }
                        echo "</td>";
                    }

                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Proyecto Welcome clemente-elBourkhissi</p>
    </footer>
</body>
</html>
