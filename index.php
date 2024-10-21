<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Alumnos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        img {
            width: 100px;
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
                    <?php
                    $htmls = scandir("./profiles", SCANDIR_SORT_ASCENDING);
                    $count = 0;
                    foreach($htmls as $html) {
                        if($html == "." || $html == "..") continue;
                        if(substr($html, -5) == ".html") {
                            if($count % 10 == 0 && $count != 0) {
                                echo "</tr><tr>";
                            }
                            $name = substr($html, 0, -5);
                            $imagePath = "./images/$name.jpg";
                            $imageTag = file_exists($imagePath) ? "<img src='$imagePath' alt='$name'>" : "";

                            echo "<td><a href='profiles/$html'>$name</a><br>$imageTag</td>";
                            $count++;
                        }
                    }
                    while ($count % 10 != 0) {
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
