<?php
include 'includes/header.php';

$conexion = mysqli_connect('localhost', 'root', '', 'autos');

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$query = "SELECT * FROM autos";
$result = mysqli_query($conexion, $query);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autos</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            min-height: 100%;
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        h1 {
            margin: 20px;
            color: #333;
            text-align: center;
        }

        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            flex-grow: 1;
        }

        .card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 45%;
            padding: 20px;
            text-align: center;
        }

        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .card h1 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover h1 {
            color: blue;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <header>
            <h1>Listado de Autos en Venta</h1>
        </header>

        <div class="content-wrapper">
            <?php
            while ($auto = mysqli_fetch_assoc($result)) {
                echo '<div class="card">';
                echo '<a href="detalles-auto.php?id=' . $auto['id'] . '">';
                echo '<h1>' . $auto['Brand'] . ' ' . $auto['Model'] . '</h1>';
                echo '<img src="imagenes/autos/' . $auto['Image'] . '" alt="' . $auto['Model'] . '">';
                echo '</a>';
                echo '<p>' . $auto['Description'] . '</p>';
                echo '<p>Precio: $' . number_format($auto['Price'], 2) . '</p>';
                echo '</div>';
            }
            ?>
        </div>

    </div>

</body>

</html>

<?php
include 'includes/footer.php';
?>