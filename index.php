<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f9f9f9;
        }
        header {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: auto; /* Centrar la tabla */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Sombra para dar un efecto de profundidad */
        }
        td {
            border: 1px solid #ddd; /* Color de borde más claro */
            padding: 8px; /* Menos espacio en las celdas */
            text-align: center;
            background-color: #fff; /* Fondo blanco para las celdas */
            transition: background-color 0.3s; /* Transición suave al pasar el ratón */
        }
        img {
            width: 80px; /* Ajustar el tamaño de las imágenes */
            height: auto;
            border-radius: 4px; /* Bordes redondeados para las imágenes */
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #777; /* Color más claro para el texto del pie de página */
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
                    <?php
                    $htmls = scandir("./profiles", SCANDIR_SORT_ASCENDING);
                    $count = 0;
                    foreach($htmls as $html) {
                        if($html == "." || $html == "..") continue;
                        if(substr($html, -5) == ".html") {
                            if($count % 5 == 0 && $count != 0) {
                                echo "</tr><tr>";
                            }
                            $name = substr($html, 0, -5);
                            $imagePath = "./images/$name.jpg"; // Cambia aquí si las imágenes son jpg
                            $imageTag = "";

                            // Comprobar si hay una imagen con varias extensiones
                            $imageExtensions = ['jpg', 'png', 'jpeg']; // Agregar más extensiones si es necesario
                            $imageFound = false;

                            foreach ($imageExtensions as $ext) {
                                if (file_exists("./images/$name.$ext")) {
                                    $imagePath = "./images/$name.$ext";
                                    $imageTag = "<img src='$imagePath' alt='$name'>";
                                    $imageFound = true;
                                    break; // Salir del bucle al encontrar la imagen
                                }
                            }

                            echo "<td><a href='profiles/$html'>$name</a><br>$imageTag</td>";
                            $count++;
                        }
                    }
                    while ($count % 5 != 0) {
                        echo "<td></td>";
                        $count++;
                    }
                    ?>
                </tr>
            </table>
        </section>
    </main>
    <footer>
        <p>Proyecto Welcome clemente-elBourkhissi</p>
    </footer>
</body>
</html>

