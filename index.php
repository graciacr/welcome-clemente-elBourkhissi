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
        <h1>Welcome Garcia-Lopez</h1>
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
                    $profiles = glob($profileDir . '*.html');

                    foreach ($profiles as $profile) {
                        $fileName = basename($profile, '.html');
                        $imagePath = $imageDir . $fileName . '.jpg';

                        echo '<tr>';
                        echo "<td>$fileName</td>";
                        echo "<td><a href='$profile'>Ver Perfil</a></td>";

                        if (file_exists($imagePath)) {
                            echo "<td><img src='$imagePath' alt='Imagen de $fileName'></td>";
                        } else {
                            echo "<td>No hay imagen</td>";
                        }

                        echo "<td>Descripción de $fileName</td>";
                        echo "<td>Contacto de $fileName</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Welcome Garcia-Lopez</p>
    </footer>
</body>
</html>
