<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números del 1 al 100</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/x-icon" href="img/t-rex.png">

    <!--ENLAZAR EL CSS-->
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1>Números del 1 al 100</h1>
    <p>Hecho por Fipe y Marcia para Alexis</p>

    <section>
        <?php 
            for($i = 0; $i <= 100; $i++)
            {
                echo "<a href='#' onclick='return false;' onmousedown='n".$i.".play()'>".$i."</a>";

            }
        ?>
    </section>

    <script src="app.js" type="text/javascript"></script>
</body>
</html>